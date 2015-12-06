<?php

namespace Zelenin\Ddd\Core\Domain\Repository;

use Zelenin\Ddd\Core\Domain\Contract\HasId;
use Zelenin\Ddd\Core\Domain\Model\Id\Id;

interface Repository extends ReadRepository
{
    /**
     * @param HasId $object
     */
    public function add(HasId $object);

    /**
     * @param HasId $object
     */
    public function remove(HasId $object);

    /**
     * @param HasId $object
     */
    public function save(HasId $object);

    /**
     * @return Id
     */
    public function nextIdentity();
}
