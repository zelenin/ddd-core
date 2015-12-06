<?php

namespace Zelenin\Ddd\Core\Domain\Exception;

use DomainException;
use Zelenin\Ddd\Core\Domain\Contract\HasClassName;

class NotMatchTypeException extends DomainException
{
    /**
     * @param HasClassName $object
     */
    public function __construct(HasClassName $object)
    {
        parent::__construct(sprintf('Not matching type. It should be "%s"', $object::className()));
    }
}
