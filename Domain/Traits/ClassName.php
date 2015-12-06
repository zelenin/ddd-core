<?php

namespace Zelenin\Ddd\Core\Domain\Traits;

trait ClassName
{
    /**
     * @return string
     */
    final public static function className()
    {
        return static::class;
    }
}
