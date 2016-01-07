<?php

namespace Zelenin\Ddd\Core\Domain\Event;

use ReflectionClass;
use Zelenin\Ddd\Core\Domain\Contract\HasClassName;
use Zelenin\Ddd\Core\Domain\Traits\ClassName;
use Zelenin\Ddd\ValueObject\Domain\Model\DateTime\Point\Calendar\DateTimeOfDay;

abstract class DefaultEvent implements Event, HasClassName
{
    use ClassName;

    /**
     * @var DateTimeOfDay
     */
    private $dateTime;

    /**
     * @return string
     */
    public function name()
    {
        return (new ReflectionClass(static::className()))->getShortName();
    }

    /**
     * @return DateTimeOfDay
     */
    public function dateTime()
    {
        return $this->dateTime;
    }
}
