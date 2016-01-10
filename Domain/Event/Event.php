<?php

namespace Zelenin\Ddd\Core\Domain\Event;

use Zelenin\Ddd\Core\Domain\Service\MessageSerializer\Message;

interface Event extends Message
{
    /**
     * @return string
     */
    public function name();
}
