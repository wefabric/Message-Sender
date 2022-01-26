<?php

namespace Wefabric\MessageSender;

use DateTime;
use DateTimeInterface;
use SimpleXMLElement;
use Wefabric\MessageSender\MessageService31_Solar\ServiceType\Get;
use Wefabric\MessageSender\MessageService31_Solar\StructType\AvailableMessagesRequestType;
use WsdlToPhp\PackageBase\SoapClientInterface;

use Wefabric\MessageSender\MessageService31_Solar\ServiceType\Post;
use Wefabric\MessageSender\MessageService31_Solar\StructType\CustomInfoType;
use Wefabric\MessageSender\MessageService31_Solar\StructType\MessagePropertiesType;
use Wefabric\MessageSender\MessageService31_Solar\StructType\MessageType;

use Wefabric\MessageSender\MessageService31_Solar\StructType\Security;
use Wefabric\MessageSender\MessageService31_Solar\StructType\Timestamp;
use Wefabric\MessageSender\MessageService31_Solar\StructType\UsernameToken;

class SolarSender extends MessageSender
{

    /**
     * @return SolarSender Object
     */
    public static function make(array $data = []): SolarSender
    {
        return new self($data);
    }

    /**
     * @return Post A complete Post-object to use and send data to the set URL and credentials.
     * Use: $response = $post->PostMessage($messageType);
     */
    function getPost() : Post
    {
        return (new Post($this->getHttpOptions()))
            ->setSoapHeaderSecurity($this->getSecurity())
            ->setSoapHeaderCustomInfo($this->getCustomInfo());
    }

    function getGet(): Get
    {
        return (new Get($this->getHttpOptions()))
            ->setSoapHeaderSecurity($this->getSecurity())
            ->setSoapHeaderCustomInfo($this->getCustomInfo());
    }

    /**
     * @return array
     */
    function getHttpOptions(): array
    {
        return array_merge(parent::getHttpOptions(), [
            SoapClientInterface::WSDL_URL => $this->url,
            SoapClientInterface::WSDL_CLASSMAP => MessageService31_Solar\ClassMap::get()
        ]);
    }

    /**
     * @return CustomInfoType
     */
    function getCustomInfo(): CustomInfoType
    {
        return new CustomInfoType($this->isTestMessage, $this->languageCode, $this->isContentCompressed, $this->applicationID, $this->versionID, $this->relationID);
    }

    /**
     * @param string $msgID
     * @return MessageType
     */
    function getNewMessage(string $msgID): MessageType
    {
        return new MessageType(msgContent: '', msgProperties: new MessagePropertiesType((new DateTime())->format(DateTimeInterface::RFC3339), $msgID, $this->msgFormat, $this->msgVersion, $this->msgType));
    }

    function getAvailableMessageRequest(): AvailableMessagesRequestType
    {
        return new AvailableMessagesRequestType(''); //empty: don't filter on type.
    }

    /**
     * @param bool $includeTimestamp
     * @return Security
     */
    function getSecurity(bool $includeTimestamp = false): Security
    {
        $format = 'Y-m-d\T\0\0\:\0\0\:\0\0\Z'; //try to force time at 00:00Z
        //$format = DateTimeInterface::RFC3339;
        return new Security(
            ($includeTimestamp ? new Timestamp((new DateTime())->format($format), (new DateTime())->modify('+1 day')->format($format)) : null),
            usernameToken: new UsernameToken($this->inlogCode, $this->password)
        );
    }

    /**
     * @param array $data
     * @return SimpleXMLElement
     */
    public function formatMessage(array $data): SimpleXMLElement
    {
        if(isset($data['DeliveryParty']['GLN'])) {
            unset($data['DeliveryParty']['GLN']);
        } // Remove GLN from DeliveryParty

        if(isset($data['DeliveryParty']['LocationDescription'])) {
            unset($data['DeliveryParty']['LocationDescription']);
        } // Remove LocationDescription from DeliveryParty

        if(isset($data['DeliveryParty']['ContactInformation'])) {
            $data['DeliveryParty']['Contactgegevens'] = $data['DeliveryParty']['ContactInformation'];
            unset($data['DeliveryParty']['ContactInformation']);
        } // Rename DeliveryParty->ContactInformation to ContactInformation

        foreach($data['OrderLine'] as $i => $orderLine)  {
            if(isset($orderLine['LineIdentification'])) {
                $newOrderLine = [];
                foreach($orderLine as $key => $value){
                    if($key === 'LineIdentification') {
                        $key = 'LineIdentitfication';
                    }
                    $newOrderLine[$key] = $value;
                }
                $data['OrderLine'][$i] = $newOrderLine;
            }
        } // Rename Orderline->LineIdentification to LineIdentitfication

        return parent::formatMessage($data);
    }
}