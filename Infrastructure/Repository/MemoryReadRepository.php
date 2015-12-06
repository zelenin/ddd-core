<?php

namespace Zelenin\Ddd\Core\Infrastructure\Repository;

use Zelenin\Ddd\Core\Domain\Collection\ArrayCollection;
use Zelenin\Ddd\Core\Domain\Model\Id\Id;
use Zelenin\Ddd\Core\Domain\Object\DefaultObject;
use Zelenin\Ddd\Core\Domain\Repository\ReadRepository;

abstract class MemoryReadRepository extends DefaultObject implements ReadRepository
{
    /**
     * @var array|ArrayCollection
     */
    protected $storage;

    /**
     * @param array $array
     */
    public function __construct($array = [])
    {
        $this->storage = new ArrayCollection($array);
    }

    /**
     * @param Id $id
     *
     * @return mixed
     */
    public function get(Id $id)
    {
        return $this->storage->get($id->id());
    }

    /**
     * @return array|ArrayCollection
     */
    public function getAll()
    {
        return $this->storage;
    }

    /**
     * @return int
     */
    public function count()
    {
        return $this->storage->count();
    }
}
