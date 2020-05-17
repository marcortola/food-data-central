<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class WweiaFoodCategory implements CreatableFromArray
{
    private ?int $wweiaFoodCategoryCode;
    private ?string $wweiaFoodCategoryDescription;

    public function getWweiaFoodCategoryCode(): ?int
    {
        return $this->wweiaFoodCategoryCode;
    }

    public function getWweiaFoodCategoryDescription(): ?string
    {
        return $this->wweiaFoodCategoryDescription;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->wweiaFoodCategoryCode = $data['wweiaFoodCategoryCode'] ?? null;
        $self->wweiaFoodCategoryDescription = $data['wweiaFoodCategoryDescription'] ?? null;

        return $self;
    }
}
