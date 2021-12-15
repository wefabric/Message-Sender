<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31\ArrayType;

use InvalidArgumentException;
use Wefabric\MessageSender\MessageService31\StructType\MessageList;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMessageList ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMessageList
 * @subpackage Arrays
 */
class ArrayOfMessageList extends AbstractStructArrayBase
{
    /**
     * The MessageList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var MessageList[]
     */
    protected ?array $MessageList = null;
    /**
     * Constructor method for ArrayOfMessageList
     * @uses ArrayOfMessageList::setMessageList()
     * @param MessageList[] $messageList
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
     * @return MessageList[]
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
        foreach ($values as $arrayOfMessageListMessageListItem) {
            // validation for constraint: itemType
            if (!$arrayOfMessageListMessageListItem instanceof MessageList) {
                $invalidValues[] = is_object($arrayOfMessageListMessageListItem) ? get_class($arrayOfMessageListMessageListItem) : sprintf('%s(%s)', gettype($arrayOfMessageListMessageListItem), var_export($arrayOfMessageListMessageListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MessageList property can only contain items of type \Wefabric\MessageSender\MessageService31\StructType\MessageList, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MessageList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param MessageList[] $messageList
     * @return ArrayOfMessageList
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
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return MessageList|null
     */
    public function current(): ?MessageList
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return MessageList|null
     */
    public function item($index): ?MessageList
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return MessageList|null
     */
    public function first(): ?MessageList
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return MessageList|null
     */
    public function last(): ?MessageList
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return MessageList|null
     */
    public function offsetGet($offset): ?MessageList
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @param MessageList $item
     * @return ArrayOfMessageList
     *@throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof MessageList) {
            throw new InvalidArgumentException(sprintf('The MessageList property can only contain items of type \Wefabric\MessageSender\MessageService31\StructType\MessageList, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MessageList
     */
    public function getAttributeName(): string
    {
        return 'MessageList';
    }
}
