<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Solar\ServiceType;

use SoapFault;
use Wefabric\MessageSender\MessageService31_Solar\StructType\AvailableMessagesRequestType;
use Wefabric\MessageSender\MessageService31_Solar\StructType\AvailableMessagesResponseType;
use Wefabric\MessageSender\MessageService31_Solar\StructType\CustomInfoType;
use Wefabric\MessageSender\MessageService31_Solar\StructType\MessageRequestResponseType;
use Wefabric\MessageSender\MessageService31_Solar\StructType\MessageRequestType;
use Wefabric\MessageSender\MessageService31_Solar\StructType\Security;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use Wefabric\MessageSender\BaseService\BaseService;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseService
{

    /**
     * Sets the Security SoapHeader param
     * @param Security $security
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return Post
     *@uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderSecurity(Security $security, string $namespace = BaseService::SecurityNS, bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'Security', $security, $mustUnderstand, $actor);
    }

    /**
     * Sets the CustomInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param CustomInfoType $customInfo
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return Get
     */
    public function setSoapHeaderCustomInfo(CustomInfoType $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'CustomInfo', $customInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetAvailableMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_Solar\StructType\CustomInfoType
     * - SOAPHeaders: required
     * - documentation: Geeft een lijst terug van alle berichten van het opgeven msgtype. Indien geen msgtype wordt meegeven dienen alle berichten (ongeacht berichttype) teruggegeven te worden. De return value van de functie is een array met
     * messageserviceavailablemessage elementen.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param AvailableMessagesRequestType $availableMessagesRequest
     * @return AvailableMessagesResponseType|bool
     */
    public function GetAvailableMessages(AvailableMessagesRequestType $availableMessagesRequest)
    {
        try {
            $this->setResult($resultGetAvailableMessages = $this->getSoapClient()->__soapCall('GetAvailableMessages', [
                $availableMessagesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableMessages;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_Solar\StructType\CustomInfoType
     * - SOAPHeaders: required
     * - documentation: Deze functie wordt aangeroepen met een msgid van het bericht dat men wil ophalen. Je kunt per aanroep dus maximaal 1 message opvragen. De functie geeft een message element terug met daarin het bericht. msgcontent is een string waarin
     * het bericht kan worden opgenomen. Als de berichten XML berichten zijn dan dienen de berichten (zonder SOAP envelop, de webservice aanroep is immers al een soap envelop) in zijn geheel in de msgcontent geplaatst te worden waarbij het bericht xml
     * encoded (i.e. <) is met UTF-8 character encoding. ASCII berichten of andere (binaire) content kan als BASE64 string worden opgenomen. Aan de hand van het msgtype en msgversionid moet de klant het bericht kunnen verwerken.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param MessageRequestType $messageRequest
     * @return MessageRequestResponseType|bool
     */
    public function GetMessage(MessageRequestType $messageRequest)
    {
        try {
            $this->setResult($resultGetMessage = $this->getSoapClient()->__soapCall('GetMessage', [
                $messageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return AvailableMessagesResponseType|MessageRequestResponseType
     *@see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
