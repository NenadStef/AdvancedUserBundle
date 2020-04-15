<?php declare(strict_types=1);

namespace Advanced\UserBundle\Model\Group;

/**
 * Class GroupDetail
 * @package Advanced\UserBundle\Model\Group
 */
abstract class GroupDetail implements GroupDetailInterface
{
    /**
     * @var string|null $name
     */
    protected ?string $name = null;

    /**
     * @var bool $hasRead
     */
    protected bool $hasRead = false;

    /**
     * @var bool $hasCreate
     */
    protected bool $hasCreate = false;

    /**
     * @var bool $hasUpdate
     */
    protected bool $hasUpdate = false;

    /**
     * @var bool $hasDelete
     */
    protected bool $hasDelete = false;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasRead(): bool
    {
        return $this->hasRead;
    }

    /**
     * @param bool $hasRead
     * @return $this
     */
    public function setHasRead(bool $hasRead): self
    {
        $this->hasRead = $hasRead;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasCreate(): bool
    {
        return $this->hasCreate;
    }

    /**
     * @param bool $hasCreate
     * @return $this
     */
    public function setHasCreate(bool $hasCreate): self
    {
        $this->hasCreate = $hasCreate;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasUpdate(): bool
    {
        return $this->hasUpdate;
    }

    /**
     * @param bool $hasUpdate
     * @return $this
     */
    public function setHasUpdate(bool $hasUpdate): self
    {
        $this->hasUpdate = $hasUpdate;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasDelete(): bool
    {
        return $this->hasDelete;
    }

    /**
     * @param bool $hasDelete
     * @return $this
     */
    public function setHasDelete(bool $hasDelete): self
    {
        $this->hasDelete = $hasDelete;
        return $this;
    }
}
