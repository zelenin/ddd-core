<?php

namespace Zelenin\Ddd\Core\Domain\Exception;

class InvalidArgumentException extends \InvalidArgumentException
{
    /**
     * @param string $message
     * @param int $code
     */
    public function __construct($message = '', $code = 0)
    {
        parent::__construct($message, $code);
    }
}
