<?php

namespace Zelenin\Ddd\Core\Application\Assembler;

use Zelenin\Ddd\Core\Application\Dto\Dto;
use Zelenin\Ddd\Core\Domain\Model\Entity;

final class DefaultCollectionAssembler implements CollectionAssembler
{
    /**
     * @var Assembler
     */
    private $assembler;

    /**
     * @param Assembler $assembler
     */
    public function __construct(Assembler $assembler)
    {
        $this->assembler = $assembler;
    }

    /**
     * @param Entity[] $entities
     *
     * @return Dto[]
     */
    public function toDto(array $entities)
    {
        return array_map(function (Entity $entity) {
            return $this->assembler->toDto($entity);
        }, $entities);
    }

    /**
     * @param Dto[] $dtos
     *
     * @return Entity[]
     */
    public function toEntity(array $dtos)
    {
        return array_map(function (Dto $dto) {
            return $this->assembler->toEntity($dto);
        }, $dtos);
    }
}
