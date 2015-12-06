<?php

namespace Zelenin\Ddd\Core\Domain\Object;

use Zelenin\Ddd\Core\Domain\Traits\ClassName;
use Zelenin\Ddd\Core\Domain\Traits\SameTypeAs;

abstract class DefaultObject implements Object
{
    use ClassName;
    use SameTypeAs;
}
