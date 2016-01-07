<?php

namespace Zelenin\Ddd\Core\Domain\Model;

use Zelenin\Ddd\Core\Domain\Contract\HasEvents;
use Zelenin\Ddd\Core\Domain\Event\Event;
use Zelenin\Ddd\Core\Domain\Exception\NotMatchTypeException;
use Zelenin\Ddd\Core\Domain\Model\Id\Id;
use Zelenin\Ddd\Core\Domain\Object\DefaultObject;
use Zelenin\Ddd\Core\Domain\Object\Object;

abstract class AggregateRoot extends DefaultEntity implements HasEvents{
    /**
     * @var Event[]
     */
    private $events = [];

    public function getUncommittedEvents()
    {
        $this->safelyPopulateEventsWithAggregateId();
        $events       = $this->events;
        $this->events = array();
        return $events;
    }
    /**
     * Used when somebody is trying to modify an Aggregate.
     * You should check that the input is good then create an event and call this method.
     *
     * @param EventInterface $event
     */
    protected function apply(EventInterface $event)
    {
        $this->executeEvent($event);
        $this->events[] = $event;
    }
    /**
     * @param EventInterface $event
     *
     * @throws BadMethodCallException
     */
    private function executeEvent(EventInterface $event)
    {
        $eventName = new EventName($event);
        $method    = sprintf('apply%s', (string) $eventName);
        if (!method_exists($this, $method)) {
            throw new BadMethodCallException(
                sprintf(
                    'You must define the %s::%s method(%s $event) in order to apply event named "%s". ',
                    get_class($this),
                    $method,
                    get_class($event),
                    $eventName
                )
            );
        }
        $this->$method($event);
    }
    /**
     *
     */
    private function safelyPopulateEventsWithAggregateId()
    {
        foreach ($this->events as $event) {
            if (null === $event->getAggregateRootId()) {
                $event->setAggregateRootId($this->id);
            }
        }
    }
}
