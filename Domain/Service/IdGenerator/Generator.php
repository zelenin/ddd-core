<?php

namespace Zelenin\Ddd\Core\Domain\Service\IdGenerator;

interface Generator
{
    /**
     * @return string
     */
    public function generate();
}
