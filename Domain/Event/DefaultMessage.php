<?php

namespace Zelenin\Ddd\Core\Domain\Event;

use Zelenin\Ddd\Core\Domain\Model\Id\Id;
use Zelenin\Ddd\ValueObject\Domain\Model\DateTime\Point\Calendar\DateTimeOfDay;

final class DefaultMessage implements Message
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $name;

    /**
     * @return Id
     */
    private $aggregateRootId;

    /**
     * @var DateTimeOfDay
     */
    private $dateTime;

    /**
     * @var Metadata
     */
    private $metadata;

    /**
     * @return Event
     */
    private $data;

    /**
     * @param $type
     * @param Id $aggregateRootId
     * @param Metadata $metadata
     * @param Event $data
     */
    public function __construct($type, Id $aggregateRootId, Metadata $metadata, Event $data)
    {
        $this->type = $type;
        $this->name = $data->name();
        $this->aggregateRootId = $aggregateRootId;
        $this->dateTime = DateTimeOfDay::now();
        $this->metadata = $metadata;
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function type()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return Id
     */
    public function aggregateRootId()
    {
        return $this->aggregateRootId;
    }

    /**
     * @return DateTimeOfDay
     */
    public function dateTime()
    {
        return $this->dateTime;
    }

    /**
     * @return Metadata
     */
    public function metaData()
    {
        return $this->metadata;
    }

    /**
     * @return Event
     */
    public function data()
    {
        return $this->data;
    }
}
