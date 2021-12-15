<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31\StructType;

use InvalidArgumentException;
use Wefabric\MessageSender\MessageService31\EnumType\MsgFormatType;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageRequestType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MessageRequestType
 * @subpackage Structs
 */
class MessageRequestType extends AbstractStructBase
{
    /**
     * The MsgId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $MsgId = null;
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
     * Constructor method for MessageRequestType
     * @uses MessageRequestType::setMsgId()
     * @uses MessageRequestType::setMsgFormat()
     * @uses MessageRequestType::setMsgVersion()
     * @param string $msgId
     * @param string $msgFormat
     * @param string $msgVersion
     */
    public function __construct(?string $msgId = null, ?string $msgFormat = null, ?string $msgVersion = null)
    {
        $this
            ->setMsgId($msgId)
            ->setMsgFormat($msgFormat)
            ->setMsgVersion($msgVersion);
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
     * @return MessageRequestType
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
     * @uses MsgFormatType::valueIsValid()
     * @uses MsgFormatType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $msgFormat
     * @return MessageRequestType
     */
    public function setMsgFormat(?string $msgFormat = null): self
    {
        // validation for constraint: enumeration
        if (!MsgFormatType::valueIsValid($msgFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Wefabric\MessageSender\MessageService31\EnumType\MsgFormatType', is_array($msgFormat) ? implode(', ', $msgFormat) : var_export($msgFormat, true), implode(', ', MsgFormatType::getValidValues())), __LINE__);
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
     * @return MessageRequestType
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
}
