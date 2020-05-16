<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class Nutrient implements CreatableFromArray
{
    private ?int $id;
    private ?string $number;
    private ?string $name;
    private ?int $rank;
    private ?string $unitName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->id = $data['id'] ?? null;
        $self->number = $data['number'] ?? null;
        $self->name = $data['name'] ?? null;
        $self->rank = $data['rank'] ?? null;
        $self->unitName = $data['unitName'] ?? null;

        return $self;
    }
}
