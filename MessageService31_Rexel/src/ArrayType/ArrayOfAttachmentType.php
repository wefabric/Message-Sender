<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Rexel\ArrayType;

use InvalidArgumentException;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\AttachmentType;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAttachmentType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAttachmentType
 * @subpackage Arrays
 */
class ArrayOfAttachmentType extends AbstractStructArrayBase
{
    /**
     * The AttachmentType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var AttachmentType[]
     */
    protected ?array $AttachmentType = null;
    /**
     * Constructor method for ArrayOfAttachmentType
     * @uses ArrayOfAttachmentType::setAttachmentType()
     * @param AttachmentType[] $attachmentType
     */
    public function __construct(?array $attachmentType = null)
    {
        $this
            ->setAttachmentType($attachmentType);
    }
    /**
     * Get AttachmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return AttachmentType[]
     */
    public function getAttachmentType(): ?array
    {
        return isset($this->AttachmentType) ? $this->AttachmentType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAttachmentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttachmentType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttachmentTypeForArrayConstraintsFromSetAttachmentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAttachmentTypeAttachmentTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfAttachmentTypeAttachmentTypeItem instanceof AttachmentType) {
                $invalidValues[] = is_object($arrayOfAttachmentTypeAttachmentTypeItem) ? get_class($arrayOfAttachmentTypeAttachmentTypeItem) : sprintf('%s(%s)', gettype($arrayOfAttachmentTypeAttachmentTypeItem), var_export($arrayOfAttachmentTypeAttachmentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AttachmentType property can only contain items of type \Wefabric\MessageSender\MessageService31_Rexel\StructType\AttachmentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AttachmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param AttachmentType[] $attachmentType
     * @return ArrayOfAttachmentType
     *@throws InvalidArgumentException
     */
    public function setAttachmentType(?array $attachmentType = null): self
    {
        // validation for constraint: array
        if ('' !== ($attachmentTypeArrayErrorMessage = self::validateAttachmentTypeForArrayConstraintsFromSetAttachmentType($attachmentType))) {
            throw new InvalidArgumentException($attachmentTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($attachmentType) || (is_array($attachmentType) && empty($attachmentType))) {
            unset($this->AttachmentType);
        } else {
            $this->AttachmentType = $attachmentType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @return AttachmentType|null
     *@see AbstractStructArrayBase::current()
     */
    public function current(): ?AttachmentType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @param int $index
     * @return AttachmentType|null
     *@see AbstractStructArrayBase::item()
     */
    public function item($index): ?AttachmentType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @return AttachmentType|null
     *@see AbstractStructArrayBase::first()
     */
    public function first(): ?AttachmentType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @return AttachmentType|null
     *@see AbstractStructArrayBase::last()
     */
    public function last(): ?AttachmentType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @param int $offset
     * @return AttachmentType|null
     *@see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?AttachmentType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @param AttachmentType $item
     * @return ArrayOfAttachmentType
     *@throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof AttachmentType) {
            throw new InvalidArgumentException(sprintf('The AttachmentType property can only contain items of type \Wefabric\MessageSender\MessageService31_Rexel\StructType\AttachmentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttachmentType
     */
    public function getAttributeName(): string
    {
        return 'AttachmentType';
    }
}
