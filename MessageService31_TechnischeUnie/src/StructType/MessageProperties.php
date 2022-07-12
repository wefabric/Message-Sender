<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageProperties StructType
 * @subpackage Structs
 */
class MessageProperties extends AbstractStructBase
{
    /**
     * The MsgDateTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $MsgDateTime;
    /**
     * The MsgId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MsgId = null;
    /**
     * The MsgFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MsgFormat = null;
    /**
     * The MsgVersion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MsgVersion = null;
    /**
     * The MsgType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MsgType = null;
    /**
     * Constructor method for MessageProperties
     * @uses MessageProperties::setMsgDateTime()
     * @uses MessageProperties::setMsgId()
     * @uses MessageProperties::setMsgFormat()
     * @uses MessageProperties::setMsgVersion()
     * @uses MessageProperties::setMsgType()
     * @param string $msgDateTime
     * @param string $msgId
     * @param string $msgFormat
     * @param string $msgVersion
     * @param string $msgType
     */
    public function __construct(string $msgDateTime, ?string $msgId = null, ?string $msgFormat = null, ?string $msgVersion = null, ?string $msgType = null)
    {
        $this
            ->setMsgDateTime($msgDateTime)
            ->setMsgId($msgId)
            ->setMsgFormat($msgFormat)
            ->setMsgVersion($msgVersion)
            ->setMsgType($msgType);
    }
    /**
     * Get MsgDateTime value
     * @return string
     */
    public function getMsgDateTime(): string
    {
        return $this->MsgDateTime;
    }
    /**
     * Set MsgDateTime value
     * @param string $msgDateTime
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageProperties
     */
    public function setMsgDateTime(string $msgDateTime): self
    {
        // validation for constraint: string
        if (!is_null($msgDateTime) && !is_string($msgDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgDateTime, true), gettype($msgDateTime)), __LINE__);
        }
        $this->MsgDateTime = $msgDateTime;
        
        return $this;
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageProperties
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
     * Get MsgFormat value
     * @return string|null
     */
    public function getMsgFormat(): ?string
    {
        return $this->MsgFormat;
    }
    /**
     * Set MsgFormat value
     * @param string $msgFormat
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageProperties
     */
    public function setMsgFormat(?string $msgFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($msgFormat) && !is_string($msgFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgFormat, true), gettype($msgFormat)), __LINE__);
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageProperties
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageProperties
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
