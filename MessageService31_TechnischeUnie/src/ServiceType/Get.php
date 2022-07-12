<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the CustomInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo $customInfo
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType\Get
     */
    public function setSoapHeaderCustomInfo(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'CustomInfo', $customInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageRequest $parameters
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageRequestResponse|bool
     */
    public function GetMessage(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageRequest $parameters)
    {
        try {
            $this->setResult($resultGetMessage = $this->getSoapClient()->__soapCall('GetMessage', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAvailableMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AvailableMessagesRequest $parameters
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AvailableMessagesResponse|bool
     */
    public function GetAvailableMessages(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AvailableMessagesRequest $parameters)
    {
        try {
            $this->setResult($resultGetAvailableMessages = $this->getSoapClient()->__soapCall('GetAvailableMessages', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableMessages;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AvailableMessagesResponse|\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageRequestResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
