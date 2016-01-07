<?php

namespace Zelenin\Ddd\Core\Domain\Model;

use BadMethodCallException;
use Zelenin\Ddd\Core\Domain\Event\DefaultStream;
use Zelenin\Ddd\Core\Domain\Event\Event;

abstract class AggregateRoot extends DefaultEntity
{
    /**
     * @var Event[]
     */
    private $events = [];

    /**
     * @return DefaultStream
     */
    public function getUncommittedEvents()
    {
        $stream = new DefaultStream($this->events);
        $this->events = [];
        return $stream;
    }

    /**
     * @param Event $event
     */
    protected function apply(Event $event)
    {
        $method = sprintf('apply%s', $event->name());
        if (!method_exists($this, $method)) {
            throw new BadMethodCallException(sprintf('Method %s::%s is not found.', static::className(), $method));
        }

        $this->$method($event);

        $this->events[] = $event;
    }
}
