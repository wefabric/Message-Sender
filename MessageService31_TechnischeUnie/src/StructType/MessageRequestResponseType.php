<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageRequestResponseType StructType
 * @subpackage Structs
 */
class MessageRequestResponseType extends AbstractStructBase
{
    /**
     * The MessageRequestResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType
     */
    protected \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType $MessageRequestResult;
    /**
     * Constructor method for MessageRequestResponseType
     * @uses MessageRequestResponseType::setMessageRequestResult()
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType $messageRequestResult
     */
    public function __construct(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType $messageRequestResult)
    {
        $this
            ->setMessageRequestResult($messageRequestResult);
    }
    /**
     * Get MessageRequestResult value
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType
     */
    public function getMessageRequestResult(): \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType
    {
        return $this->MessageRequestResult;
    }
    /**
     * Set MessageRequestResult value
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType $messageRequestResult
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageRequestResponseType
     */
    public function setMessageRequestResult(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType $messageRequestResult): self
    {
        $this->MessageRequestResult = $messageRequestResult;
        
        return $this;
    }
}
