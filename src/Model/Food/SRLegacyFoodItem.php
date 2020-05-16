<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class SRLegacyFoodItem implements FoodItem, CreatableFromArray
{
    private int $fdcId;
    private string $dataType;
    private string $description;
    private ?string $foodClass;
    private ?bool $isHistoricalReference;
    private ?string $ndbNumber;
    private ?string $publicationDate;
    private ?string $scientificName;
    private ?FoodCategory $foodCategory;
    /**
     * @var array<FoodNutrient>
     */
    private array $foodNutrients = [];
    /**
     * @var array<NutrientConversionFactors>
     */
    private array $nutrientConversionFactors = [];

    private function __construct(int $fdcId, string $dataType, string $description)
    {
        $this->fdcId = $fdcId;
        $this->dataType = $dataType;
        $this->description = $description;
    }

    public function getFdcId(): int
    {
        return $this->fdcId;
    }

    public function getDataType(): string
    {
        return $this->dataType;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

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
     * @return array<FoodNutrient>
     */
    public function getFoodNutrients(): array
    {
        return $this->foodNutrients;
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
        if (!isset($data['fdcId'], $data['dataType'], $data['description'])) {
            throw new \InvalidArgumentException();
        }

        $self = new self($data['fdcId'], $data['dataType'], $data['description']);

        $self->publicationDate = $data['publicationDate'] ?? null;
        $self->foodClass = $data['foodClass'] ?? null;
        $self->isHistoricalReference = $data['isHistoricalReference'] ?? null;
        $self->ndbNumber = $data['ndbNumber'] ?? null;
        $self->scientificName = $data['scientificName'] ?? null;

        $self->foodCategory = isset($data['foodCategory'])
            ? FoodCategory::createFromArray($data['foodCategory'])
            : null;

        if (isset($data['foodNutrients']) && \is_array($data['foodNutrients'])) {
            foreach ($data['foodNutrients'] as $foodNutrientData) {
                $self->foodNutrients[] = FoodNutrient::createFromArray($foodNutrientData);
            }
        }

        if (isset($data['nutrientConversionFactors']) && \is_array($data['nutrientConversionFactors'])) {
            foreach ($data['nutrientConversionFactors'] as $nutrientConvFactors) {
                $self->nutrientConversionFactors[] = NutrientConversionFactors::createFromArray($nutrientConvFactors);
            }
        }

        return $self;
    }
}
