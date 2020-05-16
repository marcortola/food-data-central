<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class NutrientAcquisitionDetails implements CreatableFromArray
{
    private ?int $sampleUnitId;
    private ?string $purchaseDate;
    private ?string $storeCity;
    private ?string $storeState;

    public function getSampleUnitId(): ?int
    {
        return $this->sampleUnitId;
    }

    public function getPurchaseDate(): ?string
    {
        return $this->purchaseDate;
    }

    public function getStoreCity(): ?string
    {
        return $this->storeCity;
    }

    public function getStoreState(): ?string
    {
        return $this->storeState;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->sampleUnitId = $data['sampleUnitId'] ?? null;
        $self->purchaseDate = $data['purchaseDate'] ?? null;
        $self->storeCity = $data['storeCity'] ?? null;
        $self->storeState = $data['storeState'] ?? null;

        return $self;
    }
}
