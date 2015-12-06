<?php

namespace Zelenin\Ddd\Core\Domain\Repository;

use Zelenin\Ddd\Core\Domain\Contract\HasId;
use Zelenin\Ddd\Core\Domain\Model\Id\Id;

interface ReadRepository
{
    /**
     * @param Id $id
     *
     * @return HasId
     */
    public function get(Id $id);

    /**
     * @return HasId[]
     */
    public function getAll();

    /**
     * @return int
     */
    public function count();
}
