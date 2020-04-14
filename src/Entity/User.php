<?php declare(strict_types=1);

namespace NenadStef\AdvancedUserBundle\Entity;

use DateTime;

/**
 * Class User
 * @package NenadStef\AdvancedUserBundle\Entity
 */
abstract class User
{
    /**
     * @var string|null $userName
     */
    protected ?string $userName = null;

    /**
     * @var string|null $userNameCanonical
     */
    protected ?string $userNameCanonical = null;

    /**
     * @var string|null $email
     */
    protected ?string $email = null;

    /**
     * @var string|null $emailCanonical
     */
    protected ?string $emailCanonical = null;

    /**
     * @var bool $enabled
     */
    protected bool $enabled = false;

    /**
     * The salt to use for hashing.
     *
     * @var string $salt
     */
    protected ?string $salt = null;

    /**
     * Encrypted password. Must be persisted.
     *
     * @var string $password
     */
    protected ?string $password = null;

    /**
     * @var DateTime|null $lastLogin
     */
    protected ?DateTime $lastLogin = null;

    /**
     * Random string sent to the user email address in order to verify it.
     *
     * @var string|null $confirmationToken
     */
    protected ?string $confirmationToken = null;

    /**
     * @var DateTime|null $passwordRequestedAt
     */
    protected ?DateTime $passwordRequestedAt = null;

    /**
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return $this
     */
    public function setUserName(string $userName): self
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserNameCanonical(): ?string
    {
        return $this->userNameCanonical;
    }

    /**
     * @param string $userNameCanonical
     * @return $this
     */
    public function setUserNameCanonical(string $userNameCanonical): self
    {
        $this->userNameCanonical = $userNameCanonical;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmailCanonical(): ?string
    {
        return $this->emailCanonical;
    }

    /**
     * @param string $emailCanonical
     * @return $this
     */
    public function setEmailCanonical(string $emailCanonical): self
    {
        $this->emailCanonical = $emailCanonical;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSalt(): ?string
    {
        return $this->salt;
    }

    /**
     * @param string|null $salt
     */
    public function setSalt(?string $salt): self
    {
        $this->salt = $salt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getLastLogin(): ?DateTime
    {
        return $this->lastLogin;
    }

    /**
     * @param DateTime|null $lastLogin
     * @return $this
     */
    public function setLastLogin(?DateTime $lastLogin): self
    {
        $this->lastLogin = $lastLogin;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConfirmationToken(): ?string
    {
        return $this->confirmationToken;
    }

    /**
     * @param string|null $confirmationToken
     * @return $this
     */
    public function setConfirmationToken(?string $confirmationToken): self
    {
        $this->confirmationToken = $confirmationToken;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getPasswordRequestedAt(): ?DateTime
    {
        return $this->passwordRequestedAt;
    }

    /**
     * @param DateTime|null $passwordRequestedAt
     * @return $this
     */
    public function setPasswordRequestedAt(?DateTime $passwordRequestedAt): self
    {
        $this->passwordRequestedAt = $passwordRequestedAt;
        return $this;
    }


}
