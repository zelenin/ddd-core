<?php

namespace Zelenin\Ddd\Core\Domain\Event;

use ArrayIterator;

final class DefaultStream implements Stream
{
    /**
     * @var Event[]
     */
    private $events;

    /**
     * @param Event[] $events
     */
    public function __construct(array $events)
    {
        $this->events = $events;
    }

    /**
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->events);
    }
}
