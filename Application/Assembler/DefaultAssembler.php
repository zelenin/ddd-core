<?php

namespace Zelenin\Ddd\Core\Application\Assembler;

use Zelenin\Ddd\Core\Application\Dto\Dto;
use Zelenin\Ddd\Core\Domain\Model\Entity;

abstract class DefaultAssembler implements Assembler
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
