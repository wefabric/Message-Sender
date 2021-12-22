<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Solar\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageRequestResponseType StructType
 * @subpackage Structs
 */
class MessageRequestResponseType extends AbstractStructBase
{
    /**
     * The MessageRequestResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var MessageType
     */
    protected MessageType $MessageRequestResult;
    /**
     * Constructor method for MessageRequestResponseType
     * @param MessageType $messageRequestResult
     *@uses MessageRequestResponseType::setMessageRequestResult()
     */
    public function __construct(MessageType $messageRequestResult)
    {
        $this
            ->setMessageRequestResult($messageRequestResult);
    }
    /**
     * Get MessageRequestResult value
     * @return MessageType
     */
    public function getMessageRequestResult(): MessageType
    {
        return $this->MessageRequestResult;
    }
    /**
     * Set MessageRequestResult value
     * @param MessageType $messageRequestResult
     * @return MessageRequestResponseType
     */
    public function setMessageRequestResult(MessageType $messageRequestResult): self
    {
        $this->MessageRequestResult = $messageRequestResult;
        
        return $this;
    }
}
