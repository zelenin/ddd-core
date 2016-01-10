<?php

namespace Zelenin\Ddd\Core\Domain\Event;

use Zelenin\Ddd\Core\Domain\Traits\ClassName;

final class Metadata implements \Zelenin\Ddd\Core\Domain\Service\MessageSerializer\Message
{
    use ClassName;

    /**
     * @var array
     */
    private $value = [];

    /**
     * @param array $value
     */
    public function __construct(array $value = [])
    {
        $this->value = $value;
    }

    /**
     * @return array
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * @param static $metadata
     *
     * @return static
     */
    public function addMetadata(Metadata $metadata)
    {
        $value = array_merge($this->value(), $metadata->value());

        return new static($value);
    }

    /**
     * @return array
     */
    public function serialize()
    {
        return $this->value();
    }

    /**
     * @param array $data
     *
     * @return self
     */
    public static function deserialize(array $data)
    {
        return new static($data);
    }
}
