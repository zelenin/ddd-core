<?php

namespace Zelenin\Ddd\Core\Application\Assembler;

use Zelenin\Ddd\Core\Application\Dto\Dto;
use Zelenin\Ddd\Core\Domain\Model\Entity;

interface Assembler
{
    /**
     * @param Entity $entity
     *
     * @return Dto
     */
    public function toDto(Entity $entity);

    /**
     * @param Dto $dto
     *
     * @return Entity
     */
    public function toEntity(Dto $dto);
}
