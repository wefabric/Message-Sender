<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Oosterberg\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Message StructType
 * Meta information extracted from the WSDL
 * - type: tns:Message
 * @subpackage Structs
 */
class Message extends AbstractStructBase
{
    /**
     * The MsgProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageProperties|null
     */
    protected ?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageProperties $MsgProperties = null;
    /**
     * The MsgContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MsgContent = null;
    /**
     * The Attachment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Attachment[]
     */
    protected ?array $Attachment = null;
    /**
     * Constructor method for Message
     * @uses Message::setMsgProperties()
     * @uses Message::setMsgContent()
     * @uses Message::setAttachment()
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageProperties $msgProperties
     * @param string $msgContent
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Attachment[] $attachment
     */
    public function __construct(?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageProperties $msgProperties = null, ?string $msgContent = null, ?array $attachment = null)
    {
        $this
            ->setMsgProperties($msgProperties)
            ->setMsgContent($msgContent)
            ->setAttachment($attachment);
    }
    /**
     * Get MsgProperties value
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageProperties|null
     */
    public function getMsgProperties(): ?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageProperties
    {
        return $this->MsgProperties;
    }
    /**
     * Set MsgProperties value
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageProperties $msgProperties
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message
     */
    public function setMsgProperties(?\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageProperties $msgProperties = null): self
    {
        $this->MsgProperties = $msgProperties;
        
        return $this;
    }
    /**
     * Get MsgContent value
     * @return string|null
     */
    public function getMsgContent(): ?string
    {
        return $this->MsgContent;
    }
    /**
     * Set MsgContent value
     * @param string $msgContent
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message
     */
    public function setMsgContent(?string $msgContent = null): self
    {
        // validation for constraint: string
        if (!is_null($msgContent) && !is_string($msgContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgContent, true), gettype($msgContent)), __LINE__);
        }
        $this->MsgContent = $msgContent;
        
        return $this;
    }
    /**
     * Get Attachment value
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Attachment[]
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
        foreach ($values as $messageAttachmentItem) {
            // validation for constraint: itemType
            if (!$messageAttachmentItem instanceof \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Attachment) {
                $invalidValues[] = is_object($messageAttachmentItem) ? get_class($messageAttachmentItem) : sprintf('%s(%s)', gettype($messageAttachmentItem), var_export($messageAttachmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attachment property can only contain items of type \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Attachment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Attachment value
     * @throws InvalidArgumentException
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Attachment[] $attachment
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message
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
     * @param \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Attachment $item
     * @return \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message
     */
    public function addToAttachment(\Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Attachment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Attachment) {
            throw new InvalidArgumentException(sprintf('The Attachment property can only contain items of type \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Attachment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Attachment[] = $item;
        
        return $this;
    }
}
