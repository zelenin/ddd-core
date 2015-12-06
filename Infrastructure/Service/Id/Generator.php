<?php

namespace Zelenin\Ddd\Core\Infrastructure\Service\Id;

interface Generator
{
    /**
     * @return string
     */
    public function generate();
}
