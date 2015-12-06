<?php

namespace Zelenin\Ddd\Core\Infrastructure\Repository;

use Zelenin\Ddd\Core\Domain\Contract\HasId;
use Zelenin\Ddd\Core\Domain\Model\Id\Id;
use Zelenin\Ddd\Core\Domain\Repository\Repository;

abstract class MemoryRepository extends MemoryReadRepository implements Repository
{
    /**
     * @param HasId $object
     */
    public function add(HasId $object)
    {
        $this->storage->set($object->getId()->id(), $object);
    }

    /**
     * @param HasId $object
     */
    public function remove(HasId $object)
    {
        $this->storage->remove($object->getId()->id());
    }

    /**
     * @param HasId $object
     */
    public function save(HasId $object)
    {
        $this->add($object);
    }

    /**
     * @return Id
     */
    abstract public function nextIdentity();
}
