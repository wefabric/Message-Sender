<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the CustomInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo $customInfo
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType\Delete
     */
    public function setSoapHeaderCustomInfo(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'CustomInfo', $customInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named DeleteMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageRequest $parameters
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageResponse|bool
     */
    public function DeleteMessage(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageRequest $parameters)
    {
        try {
            $this->setResult($resultDeleteMessage = $this->getSoapClient()->__soapCall('DeleteMessage', [
                $parameters,
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
