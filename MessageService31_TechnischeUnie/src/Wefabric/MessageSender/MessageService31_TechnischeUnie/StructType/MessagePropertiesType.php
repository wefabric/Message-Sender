<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessagePropertiesType StructType
 * @subpackage Structs
 */
class MessagePropertiesType extends AbstractStructBase
{
    /**
     * The MsgDateTime
     * Meta information extracted from the WSDL
     * - base: xs:dateTime
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $MsgDateTime;
    /**
     * The MsgId
     * Meta information extracted from the WSDL
     * - documentation: The representation of a GUID, generally the id of an element.
     * - base: tns:GUID
     * - maxLength: 50
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $MsgId;
    /**
     * The MsgFormat
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $MsgFormat;
    /**
     * The MsgVersion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $MsgVersion;
    /**
     * The MsgType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $MsgType;
    /**
     * Constructor method for MessagePropertiesType
     * @uses MessagePropertiesType::setMsgDateTime()
     * @uses MessagePropertiesType::setMsgId()
     * @uses MessagePropertiesType::setMsgFormat()
     * @uses MessagePropertiesType::setMsgVersion()
     * @uses MessagePropertiesType::setMsgType()
     * @param string $msgDateTime
     * @param string $msgId
     * @param string $msgFormat
     * @param string $msgVersion
     * @param string $msgType
     */
    public function __construct(string $msgDateTime, ?string $msgId, ?string $msgFormat, ?string $msgVersion, ?string $msgType)
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType
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
     * @return string
     */
    public function getMsgId(): string
    {
        return $this->MsgId;
    }
    /**
     * Set MsgId value
     * @param string $msgId
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType
     */
    public function setMsgId(?string $msgId): self
    {
        // validation for constraint: string
        if (!is_null($msgId) && !is_string($msgId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgId, true), gettype($msgId)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($msgId) && mb_strlen((string) $msgId) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $msgId)), __LINE__);
        }
        $this->MsgId = $msgId;
        
        return $this;
    }
    /**
     * Get MsgFormat value
     * @return string
     */
    public function getMsgFormat(): string
    {
        return $this->MsgFormat;
    }
    /**
     * Set MsgFormat value
     * @param string $msgFormat
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType
     */
    public function setMsgFormat(?string $msgFormat): self
    {
        // validation for constraint: string
        if (!is_null($msgFormat) && !is_string($msgFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgFormat, true), gettype($msgFormat)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($msgFormat) && mb_strlen((string) $msgFormat) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $msgFormat)), __LINE__);
        }
        $this->MsgFormat = $msgFormat;
        
        return $this;
    }
    /**
     * Get MsgVersion value
     * @return string
     */
    public function getMsgVersion(): string
    {
        return $this->MsgVersion;
    }
    /**
     * Set MsgVersion value
     * @param string $msgVersion
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType
     */
    public function setMsgVersion(?string $msgVersion): self
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
     * @return string
     */
    public function getMsgType(): string
    {
        return $this->MsgType;
    }
    /**
     * Set MsgType value
     * @param string $msgType
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType
     */
    public function setMsgType(?string $msgType): self
    {
        // validation for constraint: string
        if (!is_null($msgType) && !is_string($msgType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgType, true), gettype($msgType)), __LINE__);
        }
        $this->MsgType = $msgType;
        
        return $this;
    }
}
