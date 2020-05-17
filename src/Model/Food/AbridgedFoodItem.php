<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class AbridgedFoodItem extends AbstractFoodItem implements CreatableFromArray
{
    private ?string $publicationDate;
    private ?string $brandOwner;
    private ?string $gtinUpc;
    private ?string $ndbNumber;
    private ?string $foodCode;

    public function getPublicationDate(): ?string
    {
        return $this->publicationDate;
    }

    public function getBrandOwner(): ?string
    {
        return $this->brandOwner;
    }

    public function getGtinUpc(): ?string
    {
        return $this->gtinUpc;
    }

    public function getNdbNumber(): ?string
    {
        return $this->ndbNumber;
    }

    public function getFoodCode(): ?string
    {
        return $this->foodCode;
    }

    public static function createFromArray(array $data): self
    {
        $self = parent::createFromArray($data);

        $self->publicationDate = $data['publicationDate'] ?? null;
        $self->brandOwner = $data['brandOwner'] ?? null;
        $self->gtinUpc = $data['gtinUpc'] ?? null;
        $self->ndbNumber = $data['ndbNumber'] ?? null;
        $self->foodCode = $data['foodCode'] ?? null;

        return $self;
    }
}
