<?php

namespace Zelenin\Ddd\Core\Domain\Contract;

interface HasClassName
{
    /**
     * @return string
     */
    public static function className();
}
