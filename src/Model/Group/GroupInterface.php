<?php declare(strict_types=1);

namespace Advanced\UserBundle\Model\Group;

use Advanced\UserBundle\Model\BaseModelInterface;
use Advanced\UserBundle\Model\User\UserInterface;
use Doctrine\Common\Collections\Collection;

/**
 * Interface GroupInterface
 * @package Advanced\UserBundle\Model\Group
 */
interface GroupInterface extends BaseModelInterface
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

    /**
     * @return Collection
     */
    public function getUsers(): Collection;

    /**
     * @param Collection $users
     * @return $this
     */
    public function setUsers(Collection $users): self;

    /**
     * @param UserInterface $user
     * @return $this
     */
    public function addUser(UserInterface $user): self;

    /**
     * @param UserInterface $user
     * @return $this
     */
    public function removeUser(UserInterface $user): self;
}
