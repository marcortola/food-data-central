<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class SRLegacyFoodItem extends AbstractFoodItem implements CreatableFromArray
{
    private ?string $foodClass;
    private ?bool $isHistoricalReference;
    private ?string $ndbNumber;
    private ?string $publicationDate;
    private ?string $scientificName;
    private ?FoodCategory $foodCategory;
    /**
     * @var array<NutrientConversionFactors>
     */
    private array $nutrientConversionFactors = [];

    public function getFoodClass(): ?string
    {
        return $this->foodClass;
    }

    public function getIsHistoricalReference(): ?bool
    {
        return $this->isHistoricalReference;
    }

    public function getNdbNumber(): ?string
    {
        return $this->ndbNumber;
    }

    public function getPublicationDate(): ?string
    {
        return $this->publicationDate;
    }

    public function getScientificName(): ?string
    {
        return $this->scientificName;
    }

    public function getFoodCategory(): ?FoodCategory
    {
        return $this->foodCategory;
    }

    /**
     * @return array<NutrientConversionFactors>
     */
    public function getNutrientConversionFactors(): array
    {
        return $this->nutrientConversionFactors;
    }

    public static function createFromArray(array $data): self
    {
        $self = parent::createFromArray($data);

        $self->publicationDate = $data['publicationDate'] ?? null;
        $self->foodClass = $data['foodClass'] ?? null;
        $self->isHistoricalReference = $data['isHistoricalReference'] ?? null;
        $self->ndbNumber = $data['ndbNumber'] ?? null;
        $self->scientificName = $data['scientificName'] ?? null;

        $self->foodCategory = isset($data['foodCategory'])
            ? FoodCategory::createFromArray($data['foodCategory'])
            : null;

        if (isset($data['nutrientConversionFactors']) && \is_array($data['nutrientConversionFactors'])) {
            foreach ($data['nutrientConversionFactors'] as $nutrientConvFactors) {
                $self->nutrientConversionFactors[] = NutrientConversionFactors::createFromArray($nutrientConvFactors);
            }
        }

        return $self;
    }
}
