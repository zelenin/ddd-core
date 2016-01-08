<?php

namespace Zelenin\Ddd\Core\Domain\Event;

interface Event
{
    /**
     * @return string
     */
    public function name();
}
