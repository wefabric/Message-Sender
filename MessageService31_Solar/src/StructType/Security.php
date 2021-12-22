<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Solar\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Security StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Security
 * @subpackage Structs
 */
class Security extends AbstractStructBase
{
    /**
     * The Timestamp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var Timestamp|null
     */
    protected ?Timestamp $Timestamp = null;
    /**
     * The UsernameToken
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var UsernameToken|null
     */
    protected ?UsernameToken $UsernameToken = null;
    /**
     * Constructor method for Security
     * @uses Security::setTimestamp()
     * @uses Security::setUsernameToken()
     * @param Timestamp $timestamp
     * @param UsernameToken $usernameToken
     */
    public function __construct(?Timestamp $timestamp = null, ?UsernameToken $usernameToken = null)
    {
        $this
            ->setTimestamp($timestamp)
            ->setUsernameToken($usernameToken);
    }
    /**
     * Get Timestamp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return Timestamp|null
     */
    public function getTimestamp(): ?Timestamp
    {
        return isset($this->Timestamp) ? $this->Timestamp : null;
    }
    /**
     * Set Timestamp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param Timestamp $timestamp
     * @return Security
     */
    public function setTimestamp(?Timestamp $timestamp = null): self
    {
        if (is_null($timestamp) || (is_array($timestamp) && empty($timestamp))) {
            unset($this->Timestamp);
        } else {
            $this->Timestamp = $timestamp;
        }
        
        return $this;
    }
    /**
     * Get UsernameToken value
     * @return UsernameToken|null
     */
    public function getUsernameToken(): ?UsernameToken
    {
        return $this->UsernameToken;
    }
    /**
     * Set UsernameToken value
     * @param UsernameToken $usernameToken
     * @return Security
     */
    public function setUsernameToken(?UsernameToken $usernameToken = null): self
    {
        $this->UsernameToken = $usernameToken;
        
        return $this;
    }
}
