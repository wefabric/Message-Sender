<?php

namespace Wefabric\MessageSender;

use SimpleXMLElement;
use Spatie\DataTransferObject\DataTransferObject;
use Wefabric\ArrayToSimplexml\ArrayToSimplexml;
use WsdlToPhp\PackageBase\SoapClientInterface;

abstract class MessageSender extends DataTransferObject
{
    public string $url = '';
    public ?string $override_url = null; // specifically for TU: needs to send the message somewhere else than is specified on the WSDL itself. Also used for caching the WSDL locally.
    public string $relationID = '';
    public string $inlogCode = '';
    public string $password = '';

    // for CustomInfo :
    protected bool $isTestMessage = false;
    protected ?string $languageCode = 'NL';
    protected bool $isContentCompressed = false;
    protected string $applicationID = 'Elektrobode';
    protected string $versionID = '9.4';

    // for MessageProperties :
    protected string $msgFormat = 'INSBOU';
    protected string $msgVersion = '003';
    protected string $msgType = 'ORDERS'; // voor versturen. response = 'ORDRSP'


    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return object A complete Post-object to use and send data to the set URL and credentials.
     * Use: $response = $post->PostMessage($messageType);
     */
    abstract function getPost(): object;

    /**
     * @return object A complete Get-object to use and receive data from the set URL and credentials.
     * Use: $response = $get->GetAvailableMessages($request);
     */
    abstract function getGet(): object;

    /**
     * @return object A complete Delete-object to use and delete data at the set URL and credentials.
     * Use: $response = $delete-> ??
     */
    abstract function getDelete(): object;

    /**
     * @param bool $includeTimestamp
     * @return object
     */
    abstract function getSecurity(bool $includeTimestamp = false): object;

    /**
     * @return object
     */
    abstract function getCustomInfo(): object;

    /**
     * @return array
     */
    function getHttpOptions(): array
    {
		return array_merge([
            SoapClientInterface::WSDL_SOAP_VERSION => SOAP_1_1, //OK
            SoapClientInterface::WSDL_CONNECTION_TIMEOUT => 60,
            SoapClientInterface::WSDL_CACHE_WSDL => WSDL_CACHE_NONE,
			SoapClientInterface::WSDL_URL => $this->url, //set mode: WSDL
		],
		(
			!empty($this->override_url) ? [
                SoapClientInterface::WSDL_LOCATION => $this->override_url, //set overriding location, if provided, otherwise leave this option empty.
			] : [] ),
		);
	}

    /**
     * @param string $msgID
     * @return object
     */
    abstract function getNewMessage(string $msgID): object;
	
	/**
	 * @param string $type ORDRSP, INVOIC, DESADV for specific objects. Leave empty ('') for everything.
	 * @return object
	 */
    abstract function getAvailableMessageRequest(string $type = ''): object;

    abstract function getMessageRequestType(?string $msgId = null, ?string $msgFormat = null, ?string $msgVersion = null): object;

    /**
     * @param array $data
     * @return SimpleXMLElement
     */
    function formatMessage(array $data): SimpleXMLElement
    {
        $xml = new SimpleXMLElement('<Order xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="Order_insbou003.xsd" />');
        ArrayToSimplexml::convert($xml, $data, stripNumericKeys: true);
        return $xml;
    }

    // BELOW are the format functions that execute single edits to an INSBOU order message, that deviate from the official standard.

    /**
     * Function that applies a standard set of rules.
     * @param array $data
     * @return array
     */
    protected static function formatWithStandardRules(array $data): array
    {
        $data = self::removeValueFromParent($data, 'DeliveryParty', 'GLN');
        $data = self::renameValueInsideParent($data, 'DeliveryParty', 'ContactInformation', 'Contactgegevens');

        $data = self::renameOrderLineLineIdentificationToLineIdentiTfication($data);
        $data = self::moveOrderlineAdditionalinformationFreeTextToOrderlineFreetext($data);

        $data = self::replaceParentWithChild($data, 'CustomerOrderReference', 'EndCustomerOrderNumber');
        $data = self::replaceParentWithChild($data, 'ProjectReference', 'ProjectNumber');
        $data = self::replaceParentWithChild($data, 'DeliveryConditions', 'BackhaulingIndicator');
        $data = self::replaceParentWithChild($data, 'AdditionalInformation', 'FreeText');

        $data = self::removeValueFromRoot($data, 'UltimateConsignee');
        $data = self::removeValueFromRoot($data, 'ShipFrom');

        return $data;
    }


    /**
     * Function to remove a value from the second level.
     */
    protected static function removeValueFromParent(array $data, string $parent, string $value): array
    {
        if(isset($data[$parent][$value])) {
            unset($data[$parent][$value]);
        }
        return $data;
    }

    /**
     * Function to remove a value from the rootlevel.
     */
    protected static function removeValueFromRoot(array $data, string $value): array
    {
        if(isset($data[$value])) {
            unset($data[$value]);
        }
        return $data;
    }

    /**
     * Function to rename a value inside an array, while keeping it at the same position.
     */
    protected static function renameValue(array $data, string $value, string $newValue): array
    {
        if(isset($data[$value])) {
            $newData = [];
            foreach($data as $key => $child) {
                if($key === $value) {
                    $key = $newValue;
                }
                $newData[$key] = $child;
            }
            return $newData;
        }
        return $data;
    }

    /**
     * Function to rename a value inside a parent, while keeping it at the same position inside the parent.
     */
    protected static function renameValueInsideParent(array $data, string $parent, string $value, string $newValue): array
    {
        if(isset($data[$parent])) {
            $data[$parent] = self::renameValue($data[$parent], $value, $newValue);
        }
        return $data;
    }

    /**
     * Function to replace a parent with the specified child. The child essentially takes the place of the parent.
     * $data[$a][$b] becomes $data[$b]
     */
    protected static function replaceParentWithChild(array $data, string $parent, string $value): array
    {
        $newData = [];
        foreach($data as $key => $child){
            if($key === $parent) {
                $key = $value;
                $child = $child[$value];
            }
            $newData[$key] = $child;
        }
        return $newData;
    }

    protected static function assertValueIsArray(array $data, string $value): array
    {
        foreach($data[$value] as $key => $child)  {
            if(! is_numeric($key)) {
                $data[$value] = [ $data[$value] ];
            } //then we have only 1, not two in another array-level.
            break;
        }
        return $data;
    }

    /**
     * Renames Orderline > LineIdentification to LineIdentitfication. Note the extra T before fic...
     */
    protected static function renameOrderLineLineIdentificationToLineIdentitfication(array $data): array
    {
        $data = self::assertValueIsArray($data, 'OrderLine');

        foreach($data['OrderLine'] as $i => $orderLine)  {
            if(isset($orderLine['LineIdentification'])) {
                $data['OrderLine'][$i] = self::renameValue($orderLine, 'LineIdentification', 'LineIdentitfication');
            }
        }

        return $data;
    }

    protected static function moveOrderlineAdditionalinformationFreeTextToOrderlineFreetext(array $data): array
    {
        $data = self::assertValueIsArray($data, 'OrderLine');

        foreach($data['OrderLine'] as $i => $orderLine) {
            if(isset($orderLine['AdditionalInformation'])) {
                $data['OrderLine'][$i] = self::replaceParentWithChild($orderLine, 'AdditionalInformation', 'FreeText');
            }
        }

        return $data;
    }


}