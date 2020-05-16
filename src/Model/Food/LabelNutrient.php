<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class LabelNutrient implements CreatableFromArray
{
    private ?float $value;

    public function getValue(): ?float
    {
        return $this->value;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->value = $data['value'] ?? null;

        return $self;
    }
}
