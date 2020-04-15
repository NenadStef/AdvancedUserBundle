<?php declare(strict_types=1);

namespace Advanced\UserBundle\Model\Group;

use Advanced\UserBundle\Model\BaseModelInterface;
use Doctrine\Common\Collections\Collection;

/**
 * Interface GroupDetailInterface
 * @package Advanced\UserBundle\Model\Group
 */
interface GroupDetailInterface extends BaseModelInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self;

    /**
     * @return bool
     */
    public function hasRead(): bool;

    /**
     * @param bool $hasRead
     * @return $this
     */
    public function setHasRead(bool $hasRead): self;

    /**
     * @return bool
     */
    public function hasCreate(): bool;

    /**
     * @param bool $hasCreate
     * @return $this
     */
    public function setHasCreate(bool $hasCreate): self;

    /**
     * @return bool
     */
    public function hasUpdate(): bool;

    /**
     * @param bool $hasUpdate
     * @return $this
     */
    public function setHasUpdate(bool $hasUpdate): self;

    /**
     * @return bool
     */
    public function hasDelete(): bool;

    /**
     * @param bool $hasDelete
     * @return $this
     */
    public function setHasDelete(bool $hasDelete): self;

    /**
     * @return Collection
     */
    public function getGroupGroupDetails(): Collection;

    /**
     * @param Collection $groupGroupDetails
     * @return $this
     */
    public function setGroupGroupDetails(Collection $groupGroupDetails): self;

    /**
     * @param GroupGroupDetailInterface $groupGroupDetail
     * @return $this
     */
    public function addGroupGroupDetail(GroupGroupDetailInterface $groupGroupDetail): self;

    /**
     * @param GroupGroupDetailInterface $groupGroupDetail
     * @return $this
     */
    public function removeGroupGroupDetail(GroupGroupDetailInterface $groupGroupDetail): self;
}
