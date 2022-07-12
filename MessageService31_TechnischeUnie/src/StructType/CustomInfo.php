<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomInfo StructType
 * Meta information extracted from the WSDL
 * - type: tns:CustomInfo
 * @subpackage Structs
 */
class CustomInfo extends AbstractStructBase
{
    /**
     * The IsTestMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsTestMessage;
    /**
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LanguageCode = null;
    /**
     * The IsContentCompressed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    protected ?bool $IsContentCompressed;
    /**
     * The ApplicationId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ApplicationId = null;
    /**
     * The VersionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VersionId = null;
    /**
     * The RelationId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RelationId = null;
    /**
     * Constructor method for CustomInfo
     * @uses CustomInfo::setIsTestMessage()
     * @uses CustomInfo::setLanguageCode()
     * @uses CustomInfo::setIsContentCompressed()
     * @uses CustomInfo::setApplicationId()
     * @uses CustomInfo::setVersionId()
     * @uses CustomInfo::setRelationId()
     * @param ?bool $isTestMessage
     * @param ?string $languageCode
     * @param ?bool $isContentCompressed
     * @param ?string $applicationId
     * @param ?string $versionId
     * @param ?string $relationId
     */
    public function __construct(bool $isTestMessage, ?string $languageCode = null, ?bool $isContentCompressed, ?string $applicationId = null, ?string $versionId = null, ?string $relationId = null)
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
     * @return bool
     */
    public function getIsTestMessage(): bool
    {
        return $this->IsTestMessage;
    }
    /**
     * Set IsTestMessage value
     * @param bool $isTestMessage
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo
     */
    public function setIsTestMessage(bool $isTestMessage): self
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
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
    /**
     * Get IsContentCompressed value
     * @return bool
     */
    public function getIsContentCompressed(): bool
    {
        return $this->IsContentCompressed;
    }
    /**
     * Set IsContentCompressed value
     * @param bool $isContentCompressed
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo
     */
    public function setIsContentCompressed(?bool $isContentCompressed): self
    {
        // validation for constraint: boolean
        if (!is_null($isContentCompressed) && !is_bool($isContentCompressed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isContentCompressed, true), gettype($isContentCompressed)), __LINE__);
        }
        $this->IsContentCompressed = $isContentCompressed;
        
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo
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
