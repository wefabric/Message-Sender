<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attachment StructType
 * @subpackage Structs
 */
class Attachment extends AbstractStructBase
{
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $URL = null;
    /**
     * The DocumentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DocumentType = null;
    /**
     * The FileType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileType = null;
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
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AttachedData = null;
    /**
     * Constructor method for Attachment
     * @uses Attachment::setURL()
     * @uses Attachment::setDocumentType()
     * @uses Attachment::setFileType()
     * @uses Attachment::setFileName()
     * @uses Attachment::setAttachedData()
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Attachment
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
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @param string $documentType
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Attachment
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Attachment
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
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Attachment
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
     * @return string|null
     */
    public function getAttachedData(): ?string
    {
        return $this->AttachedData;
    }
    /**
     * Set AttachedData value
     * @param string $attachedData
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Attachment
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
