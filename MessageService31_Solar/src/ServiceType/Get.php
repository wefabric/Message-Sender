<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Solar\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseService
{
    /**
     * Sets the CustomInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Wefabric\MessageSender\MessageService31_Solar\StructType\CustomInfoType $customInfo
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Wefabric\MessageSender\MessageService31_Solar\ServiceType\Get
     */
    public function setSoapHeaderCustomInfo(\Wefabric\MessageSender\MessageService31_Solar\StructType\CustomInfoType $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
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
     * @param \Wefabric\MessageSender\MessageService31_Solar\StructType\AvailableMessagesRequestType $availableMessagesRequest
     * @return \Wefabric\MessageSender\MessageService31_Solar\StructType\AvailableMessagesResponseType|bool
     */
    public function GetAvailableMessages(\Wefabric\MessageSender\MessageService31_Solar\StructType\AvailableMessagesRequestType $availableMessagesRequest)
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
     * @param \Wefabric\MessageSender\MessageService31_Solar\StructType\MessageRequestType $messageRequest
     * @return \Wefabric\MessageSender\MessageService31_Solar\StructType\MessageRequestResponseType|bool
     */
    public function GetMessage(\Wefabric\MessageSender\MessageService31_Solar\StructType\MessageRequestType $messageRequest)
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
     * @see AbstractSoapClientBase::getResult()
     * @return \Wefabric\MessageSender\MessageService31_Solar\StructType\AvailableMessagesResponseType|\Wefabric\MessageSender\MessageService31_Solar\StructType\MessageRequestResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
