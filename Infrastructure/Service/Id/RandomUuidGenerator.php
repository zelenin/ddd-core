<?php

namespace Zelenin\Ddd\Core\Infrastructure\Service\Id;

use Ramsey\Uuid\UuidFactory;
use Zelenin\Ddd\Core\Domain\Object\DefaultObject;

final class RandomUuidGenerator extends DefaultObject implements Generator
{
    /**
     * @var UuidFactory
     */
    private $factory;

    public function __construct()
    {
        $this->factory = new UuidFactory();
    }

    /**
     * @return string
     */
    public function generate()
    {
        return $this->factory->uuid4()->toString();
    }
}
