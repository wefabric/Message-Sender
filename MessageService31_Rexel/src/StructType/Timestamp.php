<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Rexel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Timestamp StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Timestamp
 * @subpackage Structs
 */
class Timestamp extends AbstractStructBase
{
    /**
     * The Created
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Created = null;
    /**
     * The Expires
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Expires = null;
    /**
     * Constructor method for Timestamp
     * @uses Timestamp::setCreated()
     * @uses Timestamp::setExpires()
     * @param string $created
     * @param string $expires
     */
    public function __construct(?string $created = null, ?string $expires = null)
    {
        $this
            ->setCreated($created)
            ->setExpires($expires);
    }
    /**
     * Get Created value
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $created
     * @return Timestamp
     */
    public function setCreated(?string $created = null): self
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->Created = $created;
        
        return $this;
    }
    /**
     * Get Expires value
     * @return string|null
     */
    public function getExpires(): ?string
    {
        return $this->Expires;
    }
    /**
     * Set Expires value
     * @param string $expires
     * @return Timestamp
     */
    public function setExpires(?string $expires = null): self
    {
        // validation for constraint: string
        if (!is_null($expires) && !is_string($expires)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expires, true), gettype($expires)), __LINE__);
        }
        $this->Expires = $expires;
        
        return $this;
    }
}
