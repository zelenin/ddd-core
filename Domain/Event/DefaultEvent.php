<?php

namespace Zelenin\Ddd\Core\Domain\Event;

use Zelenin\Ddd\Core\Domain\Traits\ClassName;

abstract class DefaultEvent implements Event
{
    use ClassName;
}
