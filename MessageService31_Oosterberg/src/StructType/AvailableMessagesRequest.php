<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Oosterberg\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableMessagesRequest StructType
 * @subpackage Structs
 */
class AvailableMessagesRequest extends AbstractStructBase
{
    /**
     * The MsgType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MsgType = null;
    /**
     * Constructor method for AvailableMessagesRequest
     * @uses AvailableMessagesRequest::setMsgType()
     * @param string $msgType
     */
    public function __construct(?string $msgType = null)
    {
        $this
            ->setMsgType($msgType);
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
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\AvailableMessagesRequest
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
