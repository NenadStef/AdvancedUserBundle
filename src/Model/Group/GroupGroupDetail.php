<?php declare(strict_types=1);

namespace Advanced\UserBundle\Model\Group;

/**
 * Class GroupGroupDetail
 * @package Advanced\UserBundle\Model\Group
 */
abstract class GroupGroupDetail implements GroupGroupDetailInterface
{
    /**
     * @var bool $canRead
     */
    protected bool $canRead = false;

    /**
     * @var bool $canCreate
     */
    protected bool $canCreate = false;

    /**
     * @var bool $canUpdate
     */
    protected bool $canUpdate = false;

    /**
     * @var bool $canDelete
     */
    protected bool $canDelete = false;

    /**
     * @return bool
     */
    public function canRead(): bool
    {
        return $this->canRead;
    }

    /**
     * @param bool $canRead
     * @return $this
     */
    public function setCanRead(bool $canRead): self
    {
        $this->canRead = $canRead;
        return $this;
    }

    /**
     * @return bool
     */
    public function canCreate(): bool
    {
        return $this->canCreate;
    }

    /**
     * @param bool $canCreate
     * @return $this
     */
    public function setCanCreate(bool $canCreate): self
    {
        $this->canCreate = $canCreate;
        return $this;
    }

    /**
     * @return bool
     */
    public function canUpdate(): bool
    {
        return $this->canUpdate;
    }

    /**
     * @param bool $canUpdate
     * @return $this
     */
    public function setCanUpdate(bool $canUpdate): self
    {
        $this->canUpdate = $canUpdate;
        return $this;
    }

    /**
     * @return bool
     */
    public function canDelete(): bool
    {
        return $this->canDelete;
    }

    /**
     * @param bool $canDelete
     * @return $this
     */
    public function setCanDelete(bool $canDelete): self
    {
        $this->canDelete = $canDelete;
        return $this;
    }
}
