<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class FoodAttribute implements CreatableFromArray
{
    private ?int $id;
    private ?int $sequenceNumber;
    private ?string $value;
    private ?FoodAttributeType $foodAttributeType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->sequenceNumber;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function getFoodAttributeType(): ?FoodAttributeType
    {
        return $this->foodAttributeType;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->id = $data['id'] ?? null;
        $self->sequenceNumber = $data['sequenceNumber'] ?? null;
        $self->value = $data['value'] ?? null;

        $self->foodAttributeType = isset($data['foodAttributeType'])
            ? FoodAttributeType::createFromArray($data['foodAttributeType'])
            : null;

        return $self;
    }
}
