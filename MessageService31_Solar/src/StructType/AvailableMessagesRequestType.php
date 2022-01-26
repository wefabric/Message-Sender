<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Solar\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableMessagesRequestType StructType
 * @subpackage Structs
 */
class AvailableMessagesRequestType extends AbstractStructBase
{
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
     * Constructor method for AvailableMessagesRequestType
     * @uses AvailableMessagesRequestType::setMsgType()
     * @param string $msgType
     */
    public function __construct(?string $msgType)
    {
        $this
            ->setMsgType($msgType);
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
     * @return AvailableMessagesRequestType
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
