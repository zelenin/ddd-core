<?php

namespace Zelenin\Ddd\Core\Domain\Object;

use Zelenin\Ddd\Core\Domain\Contract\HasClassName;
use Zelenin\Ddd\Core\Domain\Contract\HasSameTypeAs;

interface Object extends HasClassName, HasSameTypeAs
{
}
