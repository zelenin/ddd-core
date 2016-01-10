<?php

namespace Zelenin\Ddd\Core\Domain\Service\MessageSerializer;

use Zelenin\Ddd\Core\Domain\Service\Service;

interface MessageSerializer extends Service
{
    /**
     * @param Message $message
     *
     * @return string
     */
    public function serialize(Message $message);

    /**
     * @param $string
     *
     * @return Message
     */
    public function deserialize($string);
}
