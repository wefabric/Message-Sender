<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Rexel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageRequestResponseType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MessageRequestResponseType
 * @subpackage Structs
 */
class MessageRequestResponseType extends AbstractStructBase
{
    /**
     * The MessageRequestResult
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var MessageType|null
     */
    protected ?MessageType $MessageRequestResult = null;
    /**
     * Constructor method for MessageRequestResponseType
     * @uses MessageRequestResponseType::setMessageRequestResult()
     * @param MessageType $messageRequestResult
     */
    public function __construct(?MessageType $messageRequestResult = null)
    {
        $this
            ->setMessageRequestResult($messageRequestResult);
    }
    /**
     * Get MessageRequestResult value
     * @return MessageType|null
     */
    public function getMessageRequestResult(): ?MessageType
    {
        return $this->MessageRequestResult;
    }
    /**
     * Set MessageRequestResult value
     * @param MessageType $messageRequestResult
     * @return MessageRequestResponseType
     */
    public function setMessageRequestResult(?MessageType $messageRequestResult = null): self
    {
        $this->MessageRequestResult = $messageRequestResult;
        
        return $this;
    }
}
