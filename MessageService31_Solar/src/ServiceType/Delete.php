<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Solar\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends BaseService
{
    /**
     * Sets the CustomInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Wefabric\MessageSender\MessageService31_Solar\StructType\CustomInfoType $customInfo
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Wefabric\MessageSender\MessageService31_Solar\ServiceType\Delete
     */
    public function setSoapHeaderCustomInfo(\Wefabric\MessageSender\MessageService31_Solar\StructType\CustomInfoType $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'CustomInfo', $customInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named DeleteMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_Solar\StructType\CustomInfoType
     * - SOAPHeaders: required
     * - documentation: De functie wordt aangeroepen met het msgid dat moet worden verwijderd. Je kunt per aanroep dus maximaal 1 message verwijderen. Deze functie moet worden aangeroepen nadat een bericht is opgehaald via de 'GetMessage' functie ongeacht
     * of het bericht ook succesvol kan worden verwerkt.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Wefabric\MessageSender\MessageService31_Solar\StructType\MessageRequestType $messageRequest
     * @return \Wefabric\MessageSender\MessageService31_Solar\StructType\MessageResponseType|bool
     */
    public function DeleteMessage(\Wefabric\MessageSender\MessageService31_Solar\StructType\MessageRequestType $messageRequest)
    {
        try {
            $this->setResult($resultDeleteMessage = $this->getSoapClient()->__soapCall('DeleteMessage', [
                $messageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Wefabric\MessageSender\MessageService31_Solar\StructType\MessageResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
