<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageType StructType
 * @subpackage Structs
 */
class MessageType extends AbstractStructBase
{
    /**
     * The MsgContent
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $MsgContent;
    /**
     * The MsgProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType
     */
    protected ?\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType $MsgProperties;
    /**
     * The Attachment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType[]
     */
    protected ?array $Attachment = null;
    /**
     * Constructor method for MessageType
     * @uses MessageType::setMsgContent()
     * @uses MessageType::setMsgProperties()
     * @uses MessageType::setAttachment()
     * @param string $msgContent
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType $msgProperties
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType[] $attachment
     */
    public function __construct(string $msgContent, ?\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType $msgProperties, ?array $attachment = null)
    {
        $this
            ->setMsgContent($msgContent)
            ->setMsgProperties($msgProperties)
            ->setAttachment($attachment);
    }
    /**
     * Get MsgContent value
     * @return string
     */
    public function getMsgContent(): string
    {
        return $this->MsgContent;
    }
    /**
     * Set MsgContent value
     * @param string $msgContent
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType
     */
    public function setMsgContent(string $msgContent): self
    {
        // validation for constraint: string
        if (!is_null($msgContent) && !is_string($msgContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgContent, true), gettype($msgContent)), __LINE__);
        }
        $this->MsgContent = $msgContent;
        
        return $this;
    }
    /**
     * Get MsgProperties value
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType
     */
    public function getMsgProperties(): \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType
    {
        return $this->MsgProperties;
    }
    /**
     * Set MsgProperties value
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType $msgProperties
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType
     */
    public function setMsgProperties(?\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType $msgProperties): self
    {
        $this->MsgProperties = $msgProperties;
        
        return $this;
    }
    /**
     * Get Attachment value
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType[]
     */
    public function getAttachment(): ?array
    {
        return $this->Attachment;
    }
    /**
     * This method is responsible for validating the values passed to the setAttachment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttachment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttachmentForArrayConstraintsFromSetAttachment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $messageTypeAttachmentItem) {
            // validation for constraint: itemType
            if (!$messageTypeAttachmentItem instanceof \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType) {
                $invalidValues[] = is_object($messageTypeAttachmentItem) ? get_class($messageTypeAttachmentItem) : sprintf('%s(%s)', gettype($messageTypeAttachmentItem), var_export($messageTypeAttachmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attachment property can only contain items of type \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Attachment value
     * @throws InvalidArgumentException
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType[] $attachment
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType
     */
    public function setAttachment(?array $attachment = null): self
    {
        // validation for constraint: array
        if ('' !== ($attachmentArrayErrorMessage = self::validateAttachmentForArrayConstraintsFromSetAttachment($attachment))) {
            throw new InvalidArgumentException($attachmentArrayErrorMessage, __LINE__);
        }
        $this->Attachment = $attachment;
        
        return $this;
    }
    /**
     * Add item to Attachment value
     * @throws InvalidArgumentException
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType $item
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType
     */
    public function addToAttachment(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType) {
            throw new InvalidArgumentException(sprintf('The Attachment property can only contain items of type \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Attachment[] = $item;
        
        return $this;
    }
}
