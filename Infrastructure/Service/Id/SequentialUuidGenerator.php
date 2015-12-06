<?php

namespace Zelenin\Ddd\Core\Infrastructure\Service\Id;

use Ramsey\Uuid\Generator\CombGenerator;
use Ramsey\Uuid\Generator\RandomGeneratorFactory;
use Ramsey\Uuid\UuidFactory;

class SequentialUuidGenerator implements Generator
{
    /**
     * @var UuidFactory
     */
    private $factory;

    public function __construct()
    {
        $this->factory = new UuidFactory();
        $this->factory->setRandomGenerator(new CombGenerator(RandomGeneratorFactory::getGenerator(), $this->factory->getNumberConverter()));
    }

    /**
     * @return string
     */
    public function generate()
    {
        return $this->factory->uuid4()->toString();
    }
}
