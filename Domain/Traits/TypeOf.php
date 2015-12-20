<?php

namespace Zelenin\Ddd\Core\Domain\Traits;

/**
 * @method static className()
 */
trait SameTypeAs
{
    /**
     * @param string $className
     * @return bool
     */
    final public function typeOf($className)
    {
        return static::className() === $className;
    }
}
