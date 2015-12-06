<?php

namespace Zelenin\Ddd\Core\Domain\Traits;

use Zelenin\Ddd\Core\Domain\Object\Object;

/**
 * @method static className()
 */
trait SameTypeAs
{
    /**
     * @param Object $object
     *
     * @return bool
     */
    final public function sameTypeAs(Object $object)
    {
        return static::className() === $object::className();
    }
}
