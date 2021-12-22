<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Rexel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaultError StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FaultError
 * @subpackage Structs
 */
class FaultError extends AbstractStructBase
{
    /**
     * The FaultCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FaultCode = null;
    /**
     * The FaultDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var FaultDetails|null
     */
    protected ?FaultDetails $FaultDetails = null;
    /**
     * The FaultString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FaultString = null;
    /**
     * Constructor method for FaultError
     * @uses FaultError::setFaultCode()
     * @uses FaultError::setFaultDetails()
     * @uses FaultError::setFaultString()
     * @param string $faultCode
     * @param FaultDetails $faultDetails
     * @param string $faultString
     */
    public function __construct(?string $faultCode = null, ?FaultDetails $faultDetails = null, ?string $faultString = null)
    {
        $this
            ->setFaultCode($faultCode)
            ->setFaultDetails($faultDetails)
            ->setFaultString($faultString);
    }
    /**
     * Get FaultCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFaultCode(): ?string
    {
        return isset($this->FaultCode) ? $this->FaultCode : null;
    }
    /**
     * Set FaultCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $faultCode
     * @return FaultError
     */
    public function setFaultCode(?string $faultCode = null): self
    {
        // validation for constraint: string
        if (!is_null($faultCode) && !is_string($faultCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faultCode, true), gettype($faultCode)), __LINE__);
        }
        if (is_null($faultCode) || (is_array($faultCode) && empty($faultCode))) {
            unset($this->FaultCode);
        } else {
            $this->FaultCode = $faultCode;
        }
        
        return $this;
    }
    /**
     * Get FaultDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return FaultDetails|null
     */
    public function getFaultDetails(): ?FaultDetails
    {
        return isset($this->FaultDetails) ? $this->FaultDetails : null;
    }
    /**
     * Set FaultDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param FaultDetails $faultDetails
     * @return FaultError
     */
    public function setFaultDetails(?FaultDetails $faultDetails = null): self
    {
        if (is_null($faultDetails) || (is_array($faultDetails) && empty($faultDetails))) {
            unset($this->FaultDetails);
        } else {
            $this->FaultDetails = $faultDetails;
        }
        
        return $this;
    }
    /**
     * Get FaultString value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFaultString(): ?string
    {
        return isset($this->FaultString) ? $this->FaultString : null;
    }
    /**
     * Set FaultString value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $faultString
     * @return FaultError
     */
    public function setFaultString(?string $faultString = null): self
    {
        // validation for constraint: string
        if (!is_null($faultString) && !is_string($faultString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faultString, true), gettype($faultString)), __LINE__);
        }
        if (is_null($faultString) || (is_array($faultString) && empty($faultString))) {
            unset($this->FaultString);
        } else {
            $this->FaultString = $faultString;
        }
        
        return $this;
    }
}
