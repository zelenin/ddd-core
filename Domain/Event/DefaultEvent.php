<?php

namespace Zelenin\Ddd\Core\Domain\Event;

use ReflectionClass;
use Zelenin\Ddd\Core\Domain\Traits\ClassName;

abstract class DefaultEvent implements Event
{
    use ClassName;

    /**
     * @return string
     */
    public function name()
    {
        return (new ReflectionClass(static::className()))->getShortName();
    }
}
