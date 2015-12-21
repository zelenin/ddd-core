<?php

namespace Zelenin\Ddd\Core\Application\Assembler;

use Zelenin\Ddd\Core\Application\Dto\Dto;
use Zelenin\Ddd\Core\Domain\Model\Entity;
use Zelenin\Ddd\Core\Domain\Object\DefaultObject;

abstract class DefaultAssembler extends DefaultObject implements Assembler
{
    /**
     * @param Entity $entity
     *
     * @return Dto
     */
    abstract public function toDto(Entity $entity);

    /**
     * @param Dto $dto
     *
     * @return Entity
     */
    abstract public function toEntity(Dto $dto);
}
