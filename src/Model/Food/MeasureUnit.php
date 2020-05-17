<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class MeasureUnit implements CreatableFromArray
{
    private ?int $id;
    private ?string $abbreviation;
    private ?string $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->id = $data['id'] ?? null;
        $self->abbreviation = $data['abbreviation'] ?? null;
        $self->name = $data['name'] ?? null;

        return $self;
    }
}
