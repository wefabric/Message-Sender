<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Oosterberg\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:MessageResponse
 * @subpackage Structs
 */
class MessageResponse extends AbstractStructBase
{
    /**
     * The MessageResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $MessageResult;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message|null
     */
    protected ?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message $Message = null;
    /**
     * Constructor method for MessageResponse
     * @uses MessageResponse::setMessageResult()
     * @uses MessageResponse::setMessage()
     * @param bool $messageResult
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message $message
     */
    public function __construct(bool $messageResult, ?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message $message = null)
    {
        $this
            ->setMessageResult($messageResult)
            ->setMessage($message);
    }
    /**
     * Get MessageResult value
     * @return bool
     */
    public function getMessageResult(): bool
    {
        return $this->MessageResult;
    }
    /**
     * Set MessageResult value
     * @param bool $messageResult
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageResponse
     */
    public function setMessageResult(bool $messageResult): self
    {
        // validation for constraint: boolean
        if (!is_null($messageResult) && !is_bool($messageResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($messageResult, true), gettype($messageResult)), __LINE__);
        }
        $this->MessageResult = $messageResult;
        
        return $this;
    }
    /**
     * Get Message value
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message|null
     */
    public function getMessage(): ?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message $message
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageResponse
     */
    public function setMessage(?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message $message = null): self
    {
        $this->Message = $message;
        
        return $this;
    }
}
