<?php declare(strict_types=1);

namespace Advanced\UserBundle\Model\User;

use DateTimeInterface;

/**
 * Class User
 * @package Advanced\UserBundle\Model\User
 */
abstract class User implements UserInterface
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
     * @var DateTimeInterface|null $lastLogin
     */
    protected ?DateTimeInterface $lastLogin = null;

    /**
     * Random string sent to the user email address in order to verify it.
     *
     * @var string|null $confirmationToken
     */
    protected ?string $confirmationToken = null;

    /**
     * @var DateTimeInterface|null $passwordRequestedAt
     */
    protected ?DateTimeInterface $passwordRequestedAt = null;

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
     * @return $this
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
     * @return DateTimeInterface|null
     */
    public function getLastLogin(): ?DateTimeInterface
    {
        return $this->lastLogin;
    }

    /**
     * @param DateTimeInterface|null $lastLogin
     * @return $this
     */
    public function setLastLogin(?DateTimeInterface $lastLogin): self
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
     * @return DateTimeInterface|null
     */
    public function getPasswordRequestedAt(): ?DateTimeInterface
    {
        return $this->passwordRequestedAt;
    }

    /**
     * @param DateTimeInterface|null $passwordRequestedAt
     * @return $this
     */
    public function setPasswordRequestedAt(?DateTimeInterface $passwordRequestedAt): self
    {
        $this->passwordRequestedAt = $passwordRequestedAt;
        return $this;
    }
}
