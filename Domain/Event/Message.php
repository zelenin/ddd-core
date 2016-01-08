<?php

namespace Zelenin\Ddd\Core\Domain\Event;

use Zelenin\Ddd\Core\Domain\Model\Id\Id;
use Zelenin\Ddd\ValueObject\Domain\Model\DateTime\Point\Calendar\DateTimeOfDay;

interface Message
{
    /**
     * @return string
     */
    public function name();

    /**
     * @return Id
     */
    public function aggregateRootId();

    /**
     * @return DateTimeOfDay
     */
    public function dateTime();

    /**
     * @return Event
     */
    public function data();
}
