<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Solar\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageResponseType StructType
 * @subpackage Structs
 */
class MessageResponseType extends AbstractStructBase
{
    /**
     * The MessageResult
     * Meta information extracted from the WSDL
     * - base: xs:boolean
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
     * @var MessageType|null
     */
    protected ?MessageType $Message = null;
    /**
     * Constructor method for MessageResponseType
     * @param bool $messageResult
     * @param MessageType $message
     *@uses MessageResponseType::setMessageResult()
     * @uses MessageResponseType::setMessage()
     */
    public function __construct(bool $messageResult, ?MessageType $message = null)
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
     * @return MessageResponseType
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
     * @return MessageType|null
     */
    public function getMessage(): ?MessageType
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MessageType $message
     * @return MessageResponseType
     */
    public function setMessage(?MessageType $message = null): self
    {
        $this->Message = $message;
        
        return $this;
    }
}
