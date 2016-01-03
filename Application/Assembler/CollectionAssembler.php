<?php

namespace Zelenin\Ddd\Core\Application\Assembler;

use Zelenin\Ddd\Core\Application\Dto\Dto;
use Zelenin\Ddd\Core\Domain\Model\Entity;

interface CollectionAssembler
{
    /**
     * @param Entity[] $entities
     *
     * @return Dto[]
     */
    public function toDto(array $entities);

    /**
     * @param Dto[] $dtos
     *
     * @return Entity[]
     */
    public function toEntity(array $dtos);
}
