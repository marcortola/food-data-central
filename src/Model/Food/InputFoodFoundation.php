<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class InputFoodFoundation implements CreatableFromArray
{
    private ?int $id;
    private ?string $foodDescription;
    private ?SampleFoodItem $inputFood;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoodDescription(): ?string
    {
        return $this->foodDescription;
    }

    public function getInputFood(): ?SampleFoodItem
    {
        return $this->inputFood;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->id = $data['id'] ?? null;
        $self->foodDescription = $data['foodDescription'] ?? null;

        $self->inputFood = isset($data['inputFood'])
            ? SampleFoodItem::createFromArray($data['inputFood'])
            : null;

        return $self;
    }
}
