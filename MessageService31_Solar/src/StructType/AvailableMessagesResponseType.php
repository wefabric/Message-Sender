<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Solar\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableMessagesResponseType StructType
 * @subpackage Structs
 */
class AvailableMessagesResponseType extends AbstractStructBase
{
    /**
     * The MessageList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var MessagePropertiesType[]
     */
    protected ?array $MessageList = null;
    /**
     * Constructor method for AvailableMessagesResponseType
     * @param MessagePropertiesType[] $messageList
     *@uses AvailableMessagesResponseType::setMessageList()
     */
    public function __construct(?array $messageList = null)
    {
        $this
            ->setMessageList($messageList);
    }
    /**
     * Get MessageList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return MessagePropertiesType[]
     */
    public function getMessageList(): ?array
    {
        return isset($this->MessageList) ? $this->MessageList : null;
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
        foreach ($values as $availableMessagesResponseTypeMessageListItem) {
            // validation for constraint: itemType
            if (!$availableMessagesResponseTypeMessageListItem instanceof MessagePropertiesType) {
                $invalidValues[] = is_object($availableMessagesResponseTypeMessageListItem) ? get_class($availableMessagesResponseTypeMessageListItem) : sprintf('%s(%s)', gettype($availableMessagesResponseTypeMessageListItem), var_export($availableMessagesResponseTypeMessageListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MessageList property can only contain items of type \Wefabric\MessageSender\MessageService31_Solar\StructType\MessagePropertiesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MessageList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param MessagePropertiesType[] $messageList
     * @return \Wefabric\MessageSender\MessageService31_Solar\StructType\AvailableMessagesResponseType
     *@throws InvalidArgumentException
     */
    public function setMessageList(?array $messageList = null): self
    {
        // validation for constraint: array
        if ('' !== ($messageListArrayErrorMessage = self::validateMessageListForArrayConstraintsFromSetMessageList($messageList))) {
            throw new InvalidArgumentException($messageListArrayErrorMessage, __LINE__);
        }
        if (is_null($messageList) || (is_array($messageList) && empty($messageList))) {
            unset($this->MessageList);
        } else {
            $this->MessageList = $messageList;
        }
        
        return $this;
    }
    /**
     * Add item to MessageList value
     * @param MessagePropertiesType $item
     * @return \Wefabric\MessageSender\MessageService31_Solar\StructType\AvailableMessagesResponseType
     *@throws InvalidArgumentException
     */
    public function addToMessageList(MessagePropertiesType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof MessagePropertiesType) {
            throw new InvalidArgumentException(sprintf('The MessageList property can only contain items of type \Wefabric\MessageSender\MessageService31_Solar\StructType\MessagePropertiesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MessageList[] = $item;
        
        return $this;
    }
}
