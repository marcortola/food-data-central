<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class SampleFoodItem implements CreatableFromArray
{
    private ?int $number;
    private ?string $name;
    private ?float $amount;
    private ?string $unitName;
    private ?string $derivationCode;
    private ?string $derivationDescription;

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    public function getDerivationCode(): ?string
    {
        return $this->derivationCode;
    }

    public function getDerivationDescription(): ?string
    {
        return $this->derivationDescription;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->number = $data['number'] ?? null;
        $self->name = $data['name'] ?? null;
        $self->amount = $data['amount'] ?? null;
        $self->unitName = $data['unitName'] ?? null;
        $self->derivationCode = $data['derivationCode'] ?? null;
        $self->derivationDescription = $data['derivationDescription'] ?? null;

        return $self;
    }
}
