<?php

namespace Zelenin\Ddd\Core\Domain\Object;

use Zelenin\Ddd\Core\Domain\Traits\ClassName;
use Zelenin\Ddd\Core\Domain\Traits\SameTypeAs;
use Zelenin\Ddd\Core\Domain\Traits\TypeOf;

abstract class DefaultObject implements Object
{
    use ClassName;
    use SameTypeAs;
    use TypeOf;
}
