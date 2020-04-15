<?php declare(strict_types=1);

namespace Advanced\UserBundle\Model\Group;

/**
 * Class Group
 * @package Advanced\UserBundle\Model\Group
 */
abstract class Group implements GroupInterface
{
    /**
     * @var string|null $name
     */
    protected ?string $name = null;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
