<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Rexel\ServiceType;

use SoapFault;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\CustomInfoType;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\MessageResponseType;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\MessageType;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\Security;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Post ServiceType
 * @subpackage Services
 */
class Post extends BaseService
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
     * @param CustomInfoType $customInfo
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return Post
     *@uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderCustomInfo(CustomInfoType $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'CustomInfo', $customInfo, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named PostMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Security, CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1, https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_Rexel-Rexel\StructType\Security, \Wefabric\MessageSender\MessageService31_Rexel-Rexel\StructType\CustomInfoType
     * - SOAPHeaders: required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param MessageType $message
     * @return MessageResponseType|bool
     */
    public function PostMessage(MessageType $message)
    {
        try {
            $this->setResult($resultPostMessage = $this->getSoapClient()->__soapCall('PostMessage', [
                $message,
            ], [], [], $this->outputHeaders));
        
            return $resultPostMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return MessageResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
