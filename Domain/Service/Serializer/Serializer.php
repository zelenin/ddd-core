<?php

namespace Zelenin\Ddd\Core\Domain\Service\Serializer;

interface Serializer
{
    /**
     * @param mixed $data
     *
     * @return string
     */
    public function serialize($data);

    /**
     * @param $string
     *
     * @return mixed
     */
    public function deserialize($string);
}
