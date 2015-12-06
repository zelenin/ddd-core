<?php

namespace Zelenin\Ddd\Core\Domain\Contract;

use Zelenin\Ddd\Core\Domain\Model\Id\Id;

interface HasId
{
    /**
     * @return Id
     */
    public function getId();
}
