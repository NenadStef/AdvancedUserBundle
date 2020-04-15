<?php declare(strict_types=1);

namespace Advanced\UserBundle\Model\Group;

use Advanced\UserBundle\Model\BaseModelInterface;

/**
 * Interface GroupGroupDetailInterface
 * @package Advanced\UserBundle\Model\Group
 */
interface GroupGroupDetailInterface extends BaseModelInterface
{
    /**
     * @return bool
     */
    public function canRead(): bool;

    /**
     * @param bool $canRead
     * @return $this
     */
    public function setCanRead(bool $canRead): self;

    /**
     * @return bool
     */
    public function canCreate(): bool;

    /**
     * @param bool $canCreate
     * @return $this
     */
    public function setCanCreate(bool $canCreate): self;

    /**
     * @return bool
     */
    public function canUpdate(): bool;

    /**
     * @param bool $canUpdate
     * @return $this
     */
    public function setCanUpdate(bool $canUpdate): self;

    /**
     * @return bool
     */
    public function canDelete(): bool;

    /**
     * @param bool $canDelete
     * @return $this
     */
    public function setCanDelete(bool $canDelete): self;

    /**
     * @return GroupInterface
     */
    public function getGroup(): GroupInterface;

    /**
     * @param GroupInterface $group
     * @return $this
     */
    public function setGroup(GroupInterface $group): self;

    /**
     * @return GroupDetailInterface
     */
    public function getGroupDetail(): GroupDetailInterface;

    /**
     * @param GroupDetailInterface $groupDetail
     * @return $this
     */
    public function setGroupDetail(GroupDetailInterface $groupDetail): self;
}
