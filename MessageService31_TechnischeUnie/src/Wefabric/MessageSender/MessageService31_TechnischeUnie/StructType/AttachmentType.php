<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentType StructType
 * @subpackage Structs
 */
class AttachmentType extends AbstractStructBase
{
    /**
     * The FileType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FileType;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $URL;
    /**
     * The DocumentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DocumentType = null;
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileName = null;
    /**
     * The AttachedData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    protected ?string $AttachedData;
    /**
     * Constructor method for AttachmentType
     * @uses AttachmentType::setFileType()
     * @uses AttachmentType::setURL()
     * @uses AttachmentType::setDocumentType()
     * @uses AttachmentType::setFileName()
     * @uses AttachmentType::setAttachedData()
     * @param string $fileType
     * @param string $uRL
     * @param string $documentType
     * @param string $fileName
     * @param string $attachedData
     */
    public function __construct(string $fileType, ?string $uRL, ?string $documentType = null, ?string $fileName = null, ?string $attachedData)
    {
        $this
            ->setFileType($fileType)
            ->setURL($uRL)
            ->setDocumentType($documentType)
            ->setFileName($fileName)
            ->setAttachedData($attachedData);
    }
    /**
     * Get FileType value
     * @return string
     */
    public function getFileType(): string
    {
        return $this->FileType;
    }
    /**
     * Set FileType value
     * @param string $fileType
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType
     */
    public function setFileType(string $fileType): self
    {
        // validation for constraint: string
        if (!is_null($fileType) && !is_string($fileType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileType, true), gettype($fileType)), __LINE__);
        }
        $this->FileType = $fileType;
        
        return $this;
    }
    /**
     * Get URL value
     * @return string
     */
    public function getURL(): string
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType
     */
    public function setURL(?string $uRL): self
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Get DocumentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @param string $documentType
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->DocumentType = $documentType;
        
        return $this;
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        
        return $this;
    }
    /**
     * Get AttachedData value
     * @return string
     */
    public function getAttachedData(): string
    {
        return $this->AttachedData;
    }
    /**
     * Set AttachedData value
     * @param string $attachedData
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AttachmentType
     */
    public function setAttachedData(?string $attachedData): self
    {
        // validation for constraint: string
        if (!is_null($attachedData) && !is_string($attachedData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attachedData, true), gettype($attachedData)), __LINE__);
        }
        $this->AttachedData = $attachedData;
        
        return $this;
    }
}
