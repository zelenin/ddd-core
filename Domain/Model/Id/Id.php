<?php

namespace Zelenin\Ddd\Core\Domain\Model\Id;

interface Id
{
    /**
     * @return integer|string
     */
    public function id();
}
