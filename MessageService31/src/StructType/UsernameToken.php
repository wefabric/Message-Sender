<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsernameToken StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UsernameToken
 * @subpackage Structs
 */
class UsernameToken extends AbstractStructBase
{
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Username = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * Constructor method for UsernameToken
     * @uses UsernameToken::setUsername()
     * @uses UsernameToken::setPassword()
     * @param string $username
     * @param string $password
     */
    public function __construct(?string $username = null, ?string $password = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password);
    }
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $username
     * @return UsernameToken
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->Username = $username;
        
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return UsernameToken
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        
        return $this;
    }
}
