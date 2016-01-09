<?php

namespace Zelenin\Ddd\Core\Domain\Service\IdentityGenerator;

interface IdentityGenerator
{
    /**
     * @return string
     */
    public function generate();
}
