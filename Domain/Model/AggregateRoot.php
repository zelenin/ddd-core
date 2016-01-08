<?php

namespace Zelenin\Ddd\Core\Domain\Model;

use BadMethodCallException;
use Zelenin\Ddd\Core\Domain\Event\DefaultMessage;
use Zelenin\Ddd\Core\Domain\Event\DefaultStream;
use Zelenin\Ddd\Core\Domain\Event\Event;
use Zelenin\Ddd\Core\Domain\Event\Message;

abstract class AggregateRoot extends DefaultEntity
{
    /**
     * @var Message[]
     */
    private $unCommittedEvents = [];

    /**
     * @return DefaultStream
     */
    public function getUncommittedEvents()
    {
        $stream = new DefaultStream($this->unCommittedEvents);
        $this->unCommittedEvents = [];
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

        $this->unCommittedEvents[] = new DefaultMessage($this->getId(), $event);
    }
}
