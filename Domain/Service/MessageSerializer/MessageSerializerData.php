<?php

namespace Zelenin\Ddd\Core\Domain\Service\MessageSerializer;

final class MessageSerializerData
{
    /**
     * @var string
     */
    private $className;

    /**
     * @var array
     */
    private $data;

    /**
     * @param string $className
     * @param array $data
     */
    public function __construct($className, array $data)
    {
        $this->className = $className;
        $this->data = $data;
    }

    /**
     * @param array $array
     *
     * @return static
     */
    public static function createFromArray(array $array)
    {
        return new static($array['class'], $array['data']);
    }

    /**
     * @return string
     */
    public function className()
    {
        return $this->className;
    }

    /**
     * @return array
     */
    public function data()
    {
        return $this->data;
    }
}
