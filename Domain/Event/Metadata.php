<?php

namespace Zelenin\Ddd\Core\Domain\Event;

final class Metadata
{
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
}
