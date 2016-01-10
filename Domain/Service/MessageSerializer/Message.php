<?php

namespace Zelenin\Ddd\Core\Domain\Service\MessageSerializer;

use Zelenin\Ddd\Core\Domain\Contract\HasClassName;

interface Message extends HasClassName
{
    /**
     * @return array
     */
    public function serialize();

    /**
     * @param array $data
     *
     * @return self
     */
    public static function deserialize(array $data);
}
