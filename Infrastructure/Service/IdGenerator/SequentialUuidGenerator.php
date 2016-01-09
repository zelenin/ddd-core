<?php

namespace Zelenin\Ddd\Core\Infrastructure\Service\IdGenerator;

use Ramsey\Uuid\Generator\CombGenerator;
use Ramsey\Uuid\Generator\RandomGeneratorFactory;
use Ramsey\Uuid\UuidFactory;
use Zelenin\Ddd\Core\Domain\Object\DefaultObject;
use Zelenin\Ddd\Core\Domain\Service\IdGenerator\Generator;
use Zelenin\Ddd\Core\Domain\Service\Service;

final class SequentialUuidGenerator extends DefaultObject implements Generator, Service
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
