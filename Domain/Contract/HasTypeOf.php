<?php

namespace Zelenin\Ddd\Core\Domain\Contract;

interface HasTypeOf
{
    /**
     * @param string $className
     *
     * @return bool
     */
    public function typeOf($className);
}
