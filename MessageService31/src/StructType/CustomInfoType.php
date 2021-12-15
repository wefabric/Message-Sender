<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomInfoType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CustomInfoType
 * @subpackage Structs
 */
class CustomInfoType extends AbstractStructBase
{
    /**
     * The IsTestMessage
     * @var bool|null
     */
    protected ?bool $IsTestMessage = null;
    /**
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LanguageCode = null;
    /**
     * The IsContentCompressed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsContentCompressed = null;
    /**
     * The ApplicationId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $ApplicationId = null;
    /**
     * The VersionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $VersionId = null;
    /**
     * The RelationId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $RelationId = null;
    /**
     * Constructor method for CustomInfoType
     * @uses CustomInfoType::setIsTestMessage()
     * @uses CustomInfoType::setLanguageCode()
     * @uses CustomInfoType::setIsContentCompressed()
     * @uses CustomInfoType::setApplicationId()
     * @uses CustomInfoType::setVersionId()
     * @uses CustomInfoType::setRelationId()
     * @param bool $isTestMessage
     * @param string $languageCode
     * @param bool $isContentCompressed
     * @param string $applicationId
     * @param string $versionId
     * @param string $relationId
     */
    public function __construct(?bool $isTestMessage = null, ?string $languageCode = null, ?bool $isContentCompressed = null, ?string $applicationId = null, ?string $versionId = null, ?string $relationId = null)
    {
        $this
            ->setIsTestMessage($isTestMessage)
            ->setLanguageCode($languageCode)
            ->setIsContentCompressed($isContentCompressed)
            ->setApplicationId($applicationId)
            ->setVersionId($versionId)
            ->setRelationId($relationId);
    }
    /**
     * Get IsTestMessage value
     * @return bool|null
     */
    public function getIsTestMessage(): ?bool
    {
        return $this->IsTestMessage;
    }
    /**
     * Set IsTestMessage value
     * @param bool $isTestMessage
     * @return CustomInfoType
     */
    public function setIsTestMessage(?bool $isTestMessage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTestMessage) && !is_bool($isTestMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTestMessage, true), gettype($isTestMessage)), __LINE__);
        }
        $this->IsTestMessage = $isTestMessage;
        
        return $this;
    }
    /**
     * Get LanguageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return isset($this->LanguageCode) ? $this->LanguageCode : null;
    }
    /**
     * Set LanguageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $languageCode
     * @return CustomInfoType
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        if (is_null($languageCode) || (is_array($languageCode) && empty($languageCode))) {
            unset($this->LanguageCode);
        } else {
            $this->LanguageCode = $languageCode;
        }
        
        return $this;
    }
    /**
     * Get IsContentCompressed value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsContentCompressed(): ?bool
    {
        return isset($this->IsContentCompressed) ? $this->IsContentCompressed : null;
    }
    /**
     * Set IsContentCompressed value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isContentCompressed
     * @return CustomInfoType
     */
    public function setIsContentCompressed(?bool $isContentCompressed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isContentCompressed) && !is_bool($isContentCompressed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isContentCompressed, true), gettype($isContentCompressed)), __LINE__);
        }
        if (is_null($isContentCompressed) || (is_array($isContentCompressed) && empty($isContentCompressed))) {
            unset($this->IsContentCompressed);
        } else {
            $this->IsContentCompressed = $isContentCompressed;
        }
        
        return $this;
    }
    /**
     * Get ApplicationId value
     * @return string|null
     */
    public function getApplicationId(): ?string
    {
        return $this->ApplicationId;
    }
    /**
     * Set ApplicationId value
     * @param string $applicationId
     * @return CustomInfoType
     */
    public function setApplicationId(?string $applicationId = null): self
    {
        // validation for constraint: string
        if (!is_null($applicationId) && !is_string($applicationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationId, true), gettype($applicationId)), __LINE__);
        }
        $this->ApplicationId = $applicationId;
        
        return $this;
    }
    /**
     * Get VersionId value
     * @return string|null
     */
    public function getVersionId(): ?string
    {
        return $this->VersionId;
    }
    /**
     * Set VersionId value
     * @param string $versionId
     * @return CustomInfoType
     */
    public function setVersionId(?string $versionId = null): self
    {
        // validation for constraint: string
        if (!is_null($versionId) && !is_string($versionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($versionId, true), gettype($versionId)), __LINE__);
        }
        $this->VersionId = $versionId;
        
        return $this;
    }
    /**
     * Get RelationId value
     * @return string|null
     */
    public function getRelationId(): ?string
    {
        return $this->RelationId;
    }
    /**
     * Set RelationId value
     * @param string $relationId
     * @return CustomInfoType
     */
    public function setRelationId(?string $relationId = null): self
    {
        // validation for constraint: string
        if (!is_null($relationId) && !is_string($relationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relationId, true), gettype($relationId)), __LINE__);
        }
        $this->RelationId = $relationId;
        
        return $this;
    }
}
