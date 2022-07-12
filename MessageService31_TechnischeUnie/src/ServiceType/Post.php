<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType;

use SoapFault;
use Wefabric\MessageSender\BaseService\BaseService;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Message;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageResponse;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Security;
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
     * @param ?string $actor
     * @return Post
     *@uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderSecurity(Security|array $security, string $namespace = BaseService::SecurityNS, bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'Security', $security, $mustUnderstand, $actor);
    }

    /**
     * Sets the CustomInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param CustomInfo $customInfo
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param ?string $actor
     * @return Post
     */
    public function setSoapHeaderCustomInfo(CustomInfo $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'CustomInfo', $customInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named PostMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param Message $message
     * @return MessageResponse|bool
     */
    public function PostMessage(Message $message)
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
     * @return MessageResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
