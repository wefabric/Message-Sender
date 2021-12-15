<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31\ServiceType;

use SoapFault;
use Wefabric\MessageSender\MessageService31\ArrayType\ArrayOfMessageList;
use Wefabric\MessageSender\MessageService31\StructType\AvailableMessagesRequestType;
use Wefabric\MessageSender\MessageService31\StructType\CustomInfoType;
use Wefabric\MessageSender\MessageService31\StructType\MessageRequestResponseType;
use Wefabric\MessageSender\MessageService31\StructType\MessageRequestType;
use Wefabric\MessageSender\MessageService31\StructType\Security;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the Security SoapHeader param
     * @param Security $security
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return Get
     *@uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderSecurity(Security $security, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'Security', $security, $mustUnderstand, $actor);
    }
    /**
     * Sets the CustomInfo SoapHeader param
     * @param CustomInfoType $customInfo
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return Get
     *@uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderCustomInfo(CustomInfoType $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'CustomInfo', $customInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Security, CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1, https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31\StructType\Security, \Wefabric\MessageSender\MessageService31\StructType\CustomInfoType
     * - SOAPHeaders: required, required
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
     * Method to call the operation originally named GetAvailableMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Security, CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1, https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \StructType\Security, \StructType\CustomInfoType
     * - SOAPHeaders: required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param AvailableMessagesRequestType $availableMessagesRequest
     * @return ArrayOfMessageList|bool
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
     * Returns the result
     * @return ArrayOfMessageList|MessageRequestResponseType
     *@see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
