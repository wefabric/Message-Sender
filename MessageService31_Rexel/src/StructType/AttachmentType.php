<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Rexel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AttachmentType
 * @subpackage Structs
 */
class AttachmentType extends AbstractStructBase
{
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $URL = null;
    /**
     * The DocumentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentType = null;
    /**
     * The FileType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $FileType = null;
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FileName = null;
    /**
     * The AttachedData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $AttachedData = null;
    /**
     * Constructor method for AttachmentType
     * @uses AttachmentType::setURL()
     * @uses AttachmentType::setDocumentType()
     * @uses AttachmentType::setFileType()
     * @uses AttachmentType::setFileName()
     * @uses AttachmentType::setAttachedData()
     * @param string $uRL
     * @param string $documentType
     * @param string $fileType
     * @param string $fileName
     * @param string $attachedData
     */
    public function __construct(?string $uRL = null, ?string $documentType = null, ?string $fileType = null, ?string $fileName = null, ?string $attachedData = null)
    {
        $this
            ->setURL($uRL)
            ->setDocumentType($documentType)
            ->setFileType($fileType)
            ->setFileName($fileName)
            ->setAttachedData($attachedData);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return AttachmentType
     */
    public function setURL(?string $uRL = null): self
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return isset($this->DocumentType) ? $this->DocumentType : null;
    }
    /**
     * Set DocumentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentType
     * @return AttachmentType
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        if (is_null($documentType) || (is_array($documentType) && empty($documentType))) {
            unset($this->DocumentType);
        } else {
            $this->DocumentType = $documentType;
        }
        
        return $this;
    }
    /**
     * Get FileType value
     * @return string|null
     */
    public function getFileType(): ?string
    {
        return $this->FileType;
    }
    /**
     * Set FileType value
     * @param string $fileType
     * @return AttachmentType
     */
    public function setFileType(?string $fileType = null): self
    {
        // validation for constraint: string
        if (!is_null($fileType) && !is_string($fileType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileType, true), gettype($fileType)), __LINE__);
        }
        $this->FileType = $fileType;
        
        return $this;
    }
    /**
     * Get FileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return isset($this->FileName) ? $this->FileName : null;
    }
    /**
     * Set FileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileName
     * @return AttachmentType
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        if (is_null($fileName) || (is_array($fileName) && empty($fileName))) {
            unset($this->FileName);
        } else {
            $this->FileName = $fileName;
        }
        
        return $this;
    }
    /**
     * Get AttachedData value
     * @return string|null
     */
    public function getAttachedData(): ?string
    {
        return $this->AttachedData;
    }
    /**
     * Set AttachedData value
     * @param string $attachedData
     * @return AttachmentType
     */
    public function setAttachedData(?string $attachedData = null): self
    {
        // validation for constraint: string
        if (!is_null($attachedData) && !is_string($attachedData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attachedData, true), gettype($attachedData)), __LINE__);
        }
        $this->AttachedData = $attachedData;
        
        return $this;
    }
}
