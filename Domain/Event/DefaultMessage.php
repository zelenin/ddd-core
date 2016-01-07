<?php

namespace Zelenin\Ddd\Core\Domain\Event;

use Zelenin\Ddd\Core\Domain\Model\Id\Id;
use Zelenin\Ddd\ValueObject\Domain\Model\DateTime\Point\Calendar\DateTimeOfDay;

final class DefaultMessage implements Message
{
    /**
     * @var string
     */
    private $name;

    /**
     * @return Id
     */
    private $id;

    /**
     * @var DateTimeOfDay
     */
    private $dateTime;

    /**
     * @return Event
     */
    private $data;

    /**
     * @param Id $id
     * @param Event $data
     */
    public function __construct(Id $id, Event $data)
    {
        $this->name = $data::className();
        $this->id = $id;
        $this->dateTime = DateTimeOfDay::now();
        $this->data = $data;
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
    public function id()
    {
        return $this->id;
    }

    /**
     * @return DateTimeOfDay
     */
    public function dateTime()
    {
        return $this->dateTime;
    }

    /**
     * @return Event
     */
    public function data()
    {
        return $this->data;
    }
}
