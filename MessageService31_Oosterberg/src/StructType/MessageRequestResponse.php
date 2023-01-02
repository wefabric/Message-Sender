<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Oosterberg\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageRequestResponse StructType
 * @subpackage Structs
 */
class MessageRequestResponse extends AbstractStructBase
{
    /**
     * The MessageRequestResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message|null
     */
    protected ?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message $MessageRequestResult = null;
    /**
     * Constructor method for MessageRequestResponse
     * @uses MessageRequestResponse::setMessageRequestResult()
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message $messageRequestResult
     */
    public function __construct(?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message $messageRequestResult = null)
    {
        $this
            ->setMessageRequestResult($messageRequestResult);
    }
    /**
     * Get MessageRequestResult value
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message|null
     */
    public function getMessageRequestResult(): ?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message
    {
        return $this->MessageRequestResult;
    }
    /**
     * Set MessageRequestResult value
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message $messageRequestResult
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageRequestResponse
     */
    public function setMessageRequestResult(?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message $messageRequestResult = null): self
    {
        $this->MessageRequestResult = $messageRequestResult;
        
        return $this;
    }
}
