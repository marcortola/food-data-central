<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class NutrientConversionFactors implements CreatableFromArray
{
    private ?string $type;
    private ?float $value;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->type = $data['type'] ?? null;
        $self->value = $data['value'] ?? null;

        return $self;
    }
}
