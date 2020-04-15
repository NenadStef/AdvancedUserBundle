<?php declare(strict_types=1);

namespace Advanced\UserBundle\Model\User;

use Advanced\UserBundle\Model\BaseModelInterface;
use Advanced\UserBundle\Model\Group\GroupInterface;
use DateTimeInterface;
use Doctrine\Common\Collections\Collection;

/**
 * Interface UserInterface
 * @package Advanced\UserBundle\Model\User
 */
interface UserInterface extends BaseModelInterface
{
    /**
     * @return string|null
     */
    public function getUserName(): ?string;

    /**
     * @param string $userName
     * @return $this
     */
    public function setUserName(string $userName): self;

    /**
     * @return string|null
     */
    public function getUserNameCanonical(): ?string;

    /**
     * @param string $userNameCanonical
     * @return $this
     */
    public function setUserNameCanonical(string $userNameCanonical): self;

    /**
     * @return string|null
     */
    public function getEmail(): ?string;

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): self;

    /**
     * @return string|null
     */
    public function getEmailCanonical(): ?string;

    /**
     * @param string $emailCanonical
     * @return $this
     */
    public function setEmailCanonical(string $emailCanonical): self;

    /**
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled(bool $enabled): self;

    /**
     * @return string|null
     */
    public function getSalt(): ?string;

    /**
     * @param string|null $salt
     * @return $this
     */
    public function setSalt(?string $salt): self;

    /**
     * @return string|null
     */
    public function getPassword(): ?string;

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password): self;

    /**
     * @return DateTimeInterface|null
     */
    public function getLastLogin(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface|null $lastLogin
     * @return $this
     */
    public function setLastLogin(?DateTimeInterface $lastLogin): self;

    /**
     * @return string|null
     */
    public function getConfirmationToken(): ?string;

    /**
     * @param string|null $confirmationToken
     * @return $this
     */
    public function setConfirmationToken(?string $confirmationToken): self;

    /**
     * @return DateTimeInterface|null
     */
    public function getPasswordRequestedAt(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface|null $passwordRequestedAt
     * @return $this
     */
    public function setPasswordRequestedAt(?DateTimeInterface $passwordRequestedAt): self;

    /**
     * @return Collection
     */
    public function getGroups(): Collection;

    /**
     * @param Collection $groups
     * @return $this
     */
    public function setGroups(Collection $groups): self;

    /**
     * @param GroupInterface $group
     * @return $this
     */
    public function addGroup(GroupInterface $group): self;

    /**
     * @param GroupInterface $group
     * @return $this
     */
    public function removeGroup(GroupInterface $group): self;
}
