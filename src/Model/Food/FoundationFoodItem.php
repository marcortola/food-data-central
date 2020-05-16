<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class FoundationFoodItem implements FoodItem, CreatableFromArray
{
    private int $fdcId;
    private string $dataType;
    private string $description;
    private ?string $foodClass;
    private ?string $footNote;
    private ?bool $isHistoricalReference;
    private ?string $ndbNumber;
    private ?string $publicationDate;
    private ?string $scientificName;
    private ?FoodCategory $foodCategory;
    /**
     * @var array<FoodComponent>
     */
    private array $foodComponents = [];
    /**
     * @var array<FoodNutrient>
     */
    private array $foodNutrients = [];
    /**
     * @var array<FoodPortion>
     */
    private array $foodPortions = [];
    /**
     * @var array<InputFoodFoundation>
     */
    private array $inputFoods = [];
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

    public function getFootNote(): ?string
    {
        return $this->footNote;
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
     * @return array<FoodComponent>
     */
    public function getFoodComponents(): array
    {
        return $this->foodComponents;
    }

    /**
     * @return array<FoodNutrient>
     */
    public function getFoodNutrients(): array
    {
        return $this->foodNutrients;
    }

    /**
     * @return array<FoodPortion>
     */
    public function getFoodPortions(): array
    {
        return $this->foodPortions;
    }

    /**
     * @return array<InputFoodFoundation>
     */
    public function getInputFoods(): array
    {
        return $this->inputFoods;
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
        $self->footNote = $data['footNote'] ?? null;
        $self->isHistoricalReference = $data['isHistoricalReference'] ?? null;
        $self->ndbNumber = $data['ndbNumber'] ?? null;
        $self->scientificName = $data['scientificName'] ?? null;

        $self->foodCategory = isset($data['foodCategory'])
            ? FoodCategory::createFromArray($data['foodCategory'])
            : null;

        if (isset($data['foodComponents']) && \is_array($data['foodComponents'])) {
            foreach ($data['foodComponents'] as $foodComponentsData) {
                $self->foodComponents[] = FoodComponent::createFromArray($foodComponentsData);
            }
        }

        if (isset($data['foodNutrients']) && \is_array($data['foodNutrients'])) {
            foreach ($data['foodNutrients'] as $foodNutrientData) {
                $self->foodNutrients[] = FoodNutrient::createFromArray($foodNutrientData);
            }
        }

        if (isset($data['foodPortions']) && \is_array($data['foodPortions'])) {
            foreach ($data['foodPortions'] as $foodPortionsData) {
                $self->foodPortions[] = FoodPortion::createFromArray($foodPortionsData);
            }
        }

        if (isset($data['inputFoods']) && \is_array($data['inputFoods'])) {
            foreach ($data['inputFoods'] as $inputFoodsData) {
                $self->inputFoods[] = InputFoodFoundation::createFromArray($inputFoodsData);
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
