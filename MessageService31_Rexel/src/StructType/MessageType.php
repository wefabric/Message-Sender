<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Rexel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;
use Wefabric\MessageSender\MessageService31_Rexel\ArrayType\ArrayOfAttachmentType;

/**
 * This class stands for MessageType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MessageType
 * @subpackage Structs
 */
class MessageType extends AbstractStructBase
{
    /**
     * The MsgProperties
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var MessageList|null
     */
    protected ?MessageList $MsgProperties = null;
    /**
     * The MsgContent
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $MsgContent = null;
    /**
     * The Attachment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var ArrayOfAttachmentType|null
     */
    protected ?ArrayOfAttachmentType $Attachment = null;
    /**
     * Constructor method for MessageType
     * @uses MessageType::setMsgProperties()
     * @uses MessageType::setMsgContent()
     * @uses MessageType::setAttachment()
     * @param MessageList $msgProperties
     * @param string $msgContent
     * @param ArrayOfAttachmentType $attachment
     */
    public function __construct(?MessageList $msgProperties = null, ?string $msgContent = null, ?ArrayOfAttachmentType $attachment = null)
    {
        $this
            ->setMsgProperties($msgProperties)
            ->setMsgContent($msgContent)
            ->setAttachment($attachment);
    }
    /**
     * Get MsgProperties value
     * @return MessageList|null
     */
    public function getMsgProperties(): ?MessageList
    {
        return $this->MsgProperties;
    }
    /**
     * Set MsgProperties value
     * @param MessageList $msgProperties
     * @return MessageType
     */
    public function setMsgProperties(?MessageList $msgProperties = null): self
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
     * @return MessageType
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return ArrayOfAttachmentType|null
     */
    public function getAttachment(): ?ArrayOfAttachmentType
    {
        return isset($this->Attachment) ? $this->Attachment : null;
    }
    /**
     * Set Attachment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param ArrayOfAttachmentType $attachment
     * @return MessageType
     */
    public function setAttachment(?ArrayOfAttachmentType $attachment = null): self
    {
        if (is_null($attachment) || (is_array($attachment) && empty($attachment))) {
            unset($this->Attachment);
        } else {
            $this->Attachment = $attachment;
        }
        
        return $this;
    }
}
