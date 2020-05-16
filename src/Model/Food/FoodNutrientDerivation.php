<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class FoodNutrientDerivation implements CreatableFromArray
{
    private ?int $id;
    private ?string $code;
    private ?string $description;
    private ?FoodNutrientSource $foodNutrientSource;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getFoodNutrientSource(): ?FoodNutrientSource
    {
        return $this->foodNutrientSource;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->id = $data['id'] ?? null;
        $self->code = $data['code'] ?? null;
        $self->description = $data['description'] ?? null;

        $self->foodNutrientSource = isset($data['foodNutrientSource'])
            ? FoodNutrientSource::createFromArray($data['foodNutrientSource'])
            : null;

        return $self;
    }
}
