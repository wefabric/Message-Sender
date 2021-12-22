<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Rexel\StructType;

use InvalidArgumentException;
use Wefabric\MessageSender\MessageService31_Rexel\EnumType\MsgFormatType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageList StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MessageList
 * @subpackage Structs
 */
class MessageList extends AbstractStructBase
{
    /**
     * The MsgId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $MsgId = null;
    /**
     * The MsgDateTime
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $MsgDateTime = null;
    /**
     * The MsgFormat
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $MsgFormat = null;
    /**
     * The MsgVersion
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $MsgVersion = null;
    /**
     * The MsgType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $MsgType = null;
    /**
     * Constructor method for MessageList
     * @uses MessageList::setMsgId()
     * @uses MessageList::setMsgDateTime()
     * @uses MessageList::setMsgFormat()
     * @uses MessageList::setMsgVersion()
     * @uses MessageList::setMsgType()
     * @param string $msgId
     * @param string $msgDateTime
     * @param string $msgFormat
     * @param string $msgVersion
     * @param string $msgType
     */
    public function __construct(?string $msgId = null, ?string $msgDateTime = null, ?string $msgFormat = null, ?string $msgVersion = null, ?string $msgType = null)
    {
        $this
            ->setMsgId($msgId)
            ->setMsgDateTime($msgDateTime)
            ->setMsgFormat($msgFormat)
            ->setMsgVersion($msgVersion)
            ->setMsgType($msgType);
    }
    /**
     * Get MsgId value
     * @return string|null
     */
    public function getMsgId(): ?string
    {
        return $this->MsgId;
    }
    /**
     * Set MsgId value
     * @param string $msgId
     * @return MessageList
     */
    public function setMsgId(?string $msgId = null): self
    {
        // validation for constraint: string
        if (!is_null($msgId) && !is_string($msgId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgId, true), gettype($msgId)), __LINE__);
        }
        $this->MsgId = $msgId;
        
        return $this;
    }
    /**
     * Get MsgDateTime value
     * @return string|null
     */
    public function getMsgDateTime(): ?string
    {
        return $this->MsgDateTime;
    }
    /**
     * Set MsgDateTime value
     * @param string $msgDateTime
     * @return MessageList
     */
    public function setMsgDateTime(?string $msgDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($msgDateTime) && !is_string($msgDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgDateTime, true), gettype($msgDateTime)), __LINE__);
        }
        $this->MsgDateTime = $msgDateTime;
        
        return $this;
    }
    /**
     * Get MsgFormat value
     * @return string|null
     */
    public function getMsgFormat(): ?string
    {
        return $this->MsgFormat;
    }
    /**
     * Set MsgFormat value
     * @uses MsgFormatType::valueIsValid()
     * @uses MsgFormatType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $msgFormat
     * @return MessageList
     */
    public function setMsgFormat(?string $msgFormat = null): self
    {
        // validation for constraint: enumeration
        if (!MsgFormatType::valueIsValid($msgFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Wefabric\MessageSender\MessageService31\MsgFormatType', is_array($msgFormat) ? implode(', ', $msgFormat) : var_export($msgFormat, true), implode(', ', MsgFormatType::getValidValues())), __LINE__);
        }
        $this->MsgFormat = $msgFormat;
        
        return $this;
    }
    /**
     * Get MsgVersion value
     * @return string|null
     */
    public function getMsgVersion(): ?string
    {
        return $this->MsgVersion;
    }
    /**
     * Set MsgVersion value
     * @param string $msgVersion
     * @return MessageList
     */
    public function setMsgVersion(?string $msgVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($msgVersion) && !is_string($msgVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgVersion, true), gettype($msgVersion)), __LINE__);
        }
        $this->MsgVersion = $msgVersion;
        
        return $this;
    }
    /**
     * Get MsgType value
     * @return string|null
     */
    public function getMsgType(): ?string
    {
        return $this->MsgType;
    }
    /**
     * Set MsgType value
     * @param string $msgType
     * @return MessageList
     */
    public function setMsgType(?string $msgType = null): self
    {
        // validation for constraint: string
        if (!is_null($msgType) && !is_string($msgType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgType, true), gettype($msgType)), __LINE__);
        }
        $this->MsgType = $msgType;
        
        return $this;
    }
}
