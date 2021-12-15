<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageResponseType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MessageResponseType
 * @subpackage Structs
 */
class MessageResponseType extends AbstractStructBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var MessageType|null
     */
    protected ?MessageType $Message = null;
    /**
     * The MessageResult
     * @var bool|null
     */
    protected ?bool $MessageResult = null;
    /**
     * Constructor method for MessageResponseType
     * @uses MessageResponseType::setMessage()
     * @uses MessageResponseType::setMessageResult()
     * @param MessageType $message
     * @param bool $messageResult
     */
    public function __construct(?MessageType $message = null, ?bool $messageResult = null)
    {
        $this
            ->setMessage($message)
            ->setMessageResult($messageResult);
    }
    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return MessageType|null
     */
    public function getMessage(): ?MessageType
    {
        return isset($this->Message) ? $this->Message : null;
    }
    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param MessageType $message
     * @return MessageResponseType
     */
    public function setMessage(?MessageType $message = null): self
    {
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        
        return $this;
    }
    /**
     * Get MessageResult value
     * @return bool|null
     */
    public function getMessageResult(): ?bool
    {
        return $this->MessageResult;
    }
    /**
     * Set MessageResult value
     * @param bool $messageResult
     * @return MessageResponseType
     */
    public function setMessageResult(?bool $messageResult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($messageResult) && !is_bool($messageResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($messageResult, true), gettype($messageResult)), __LINE__);
        }
        $this->MessageResult = $messageResult;
        
        return $this;
    }
}
