<?php

namespace Zelenin\Ddd\Core\Domain\Model;

use Zelenin\Ddd\Core\Domain\Object\DefaultObject;
use Zelenin\Ddd\Core\Domain\Object\Object;

abstract class DefaultValueObject extends DefaultObject implements ValueObject
{
    /**
     * @param Object $object
     *
     * @return bool
     */
    abstract public function equalsTo(Object $object);
}
