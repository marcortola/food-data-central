<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class NutrientConversionFactors implements CreatableFromArray
{
    private ?string $type;
    private ?string $value;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getValue(): ?string
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
