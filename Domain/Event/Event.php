<?php

namespace Zelenin\Ddd\Core\Domain\Event;

use Zelenin\Ddd\ValueObject\Domain\Model\DateTime\Point\Calendar\DateTimeOfDay;

interface Event
{
    /**
     * @return string
     */
    public function name();

    /**
     * @return DateTimeOfDay
     */
    public function dateTime();
}
