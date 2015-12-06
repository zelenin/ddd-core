<?php

namespace Zelenin\Ddd\Core\Domain\Contract;

use Zelenin\Ddd\Core\Domain\Object\Object;

interface HasSameTypeAs
{
    /**
     * @param Object $object
     *
     * @return bool
     */
    public function sameTypeAs(Object $object);
}
