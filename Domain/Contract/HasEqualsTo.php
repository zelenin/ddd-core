<?php

namespace Zelenin\Ddd\Core\Domain\Contract;

use Zelenin\Ddd\Core\Domain\Object\Object;

interface HasEqualsTo
{
    /**
     * @param Object $object
     *
     * @return bool
     */
    public function equalsTo(Object $object);
}
