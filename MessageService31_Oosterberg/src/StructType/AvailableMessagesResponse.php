<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Oosterberg\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableMessagesResponse StructType
 * @subpackage Structs
 */
class AvailableMessagesResponse extends AbstractStructBase
{
    /**
     * The MessageList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList[]
     */
    protected ?array $MessageList = null;
    /**
     * Constructor method for AvailableMessagesResponse
     * @uses AvailableMessagesResponse::setMessageList()
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList[] $messageList
     */
    public function __construct(?array $messageList = null)
    {
        $this
            ->setMessageList($messageList);
    }
    /**
     * Get MessageList value
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList[]
     */
    public function getMessageList(): ?array
    {
        return $this->MessageList;
    }
    /**
     * This method is responsible for validating the values passed to the setMessageList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessageList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageListForArrayConstraintsFromSetMessageList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $availableMessagesResponseMessageListItem) {
            // validation for constraint: itemType
            if (!$availableMessagesResponseMessageListItem instanceof \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList) {
                $invalidValues[] = is_object($availableMessagesResponseMessageListItem) ? get_class($availableMessagesResponseMessageListItem) : sprintf('%s(%s)', gettype($availableMessagesResponseMessageListItem), var_export($availableMessagesResponseMessageListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MessageList property can only contain items of type \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MessageList value
     * @throws InvalidArgumentException
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList[] $messageList
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\AvailableMessagesResponse
     */
    public function setMessageList(?array $messageList = null): self
    {
        // validation for constraint: array
        if ('' !== ($messageListArrayErrorMessage = self::validateMessageListForArrayConstraintsFromSetMessageList($messageList))) {
            throw new InvalidArgumentException($messageListArrayErrorMessage, __LINE__);
        }
        $this->MessageList = $messageList;
        
        return $this;
    }
    /**
     * Add item to MessageList value
     * @throws InvalidArgumentException
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList $item
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\AvailableMessagesResponse
     */
    public function addToMessageList(\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList) {
            throw new InvalidArgumentException(sprintf('The MessageList property can only contain items of type \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MessageList[] = $item;
        
        return $this;
    }
}
