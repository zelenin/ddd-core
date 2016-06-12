<?php

namespace Zelenin\Ddd\Core\Infrastructure\Service\IdentityGenerator;

use Zelenin\Ddd\Core\Domain\Object\DefaultObject;
use Zelenin\Ddd\Core\Domain\Service\IdentityGenerator\IdentityGenerator;
use Zelenin\Ddd\Core\Domain\Service\Service;

/**
 * @deprecated
 */
final class RandomUuidGenerator extends DefaultObject implements IdentityGenerator, Service
{
    /**
     * @inheritdoc
     */
    public function generate()
    {
        return (new Uuid4Generator())->generate();
    }
}
