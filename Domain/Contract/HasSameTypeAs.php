<?php

namespace Zelenin\Ddd\Core\Domain\Contract;

interface HasSameTypeAs
{
    /**
     * @param Object $object
     *
     * @return bool
     */
    public function sameTypeAs(Object $object);
}
