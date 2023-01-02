<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Oosterberg\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageRequest StructType
 * @subpackage Structs
 */
class MessageRequest extends AbstractStructBase
{
    /**
     * The MsgFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MsgFormat = null;
    /**
     * The MsgId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MsgId = null;
    /**
     * The MsgVersion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MsgVersion = null;
    /**
     * Constructor method for MessageRequest
     * @uses MessageRequest::setMsgFormat()
     * @uses MessageRequest::setMsgId()
     * @uses MessageRequest::setMsgVersion()
     * @param string $msgFormat
     * @param string $msgId
     * @param string $msgVersion
     */
    public function __construct(?string $msgFormat = null, ?string $msgId = null, ?string $msgVersion = null)
    {
        $this
            ->setMsgFormat($msgFormat)
            ->setMsgId($msgId)
            ->setMsgVersion($msgVersion);
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
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageRequest
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
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageRequest
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
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageRequest
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
