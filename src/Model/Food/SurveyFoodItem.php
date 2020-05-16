<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class SurveyFoodItem implements CreatableFromArray
{
    private int $fdcId;
    private string $description;
    private ?string $dataType;
    private ?string $endDate;
    private ?string $foodClass;
    private ?string $foodCode;
    private ?string $publicationDate;
    private ?string $startDate;
    private ?WweiaFoodCategory $wweiaFoodCategory;
    /**
     * @var array<FoodAttribute>
     */
    private array $foodAttributes = [];
    /**
     * @var array<FoodPortion>
     */
    private array $foodPortions = [];
    /**
     * @var array<InputFoodFoundation>
     */
    private array $inputFoods = [];

    private function __construct(int $fdcId, string $description)
    {
        $this->fdcId = $fdcId;
        $this->description = $description;
    }

    public function getFdcId(): int
    {
        return $this->fdcId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    public function getFoodClass(): ?string
    {
        return $this->foodClass;
    }

    public function getFoodCode(): ?string
    {
        return $this->foodCode;
    }

    public function getPublicationDate(): ?string
    {
        return $this->publicationDate;
    }

    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    public function getWweiaFoodCategory(): ?WweiaFoodCategory
    {
        return $this->wweiaFoodCategory;
    }

    /**
     * @return array<FoodAttribute>
     */
    public function getFoodAttributes(): array
    {
        return $this->foodAttributes;
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

    public static function createFromArray(array $data): self
    {
        if (!isset($data['fdcId'], $data['description'])) {
            throw new \InvalidArgumentException();
        }

        $self = new self($data['fdcId'], $data['description']);

        $self->dataType = $data['dataType'] ?? null;
        $self->endDate = $data['endDate'] ?? null;
        $self->foodClass = $data['foodClass'] ?? null;
        $self->foodCode = $data['foodCode'] ?? null;
        $self->publicationDate = $data['publicationDate'] ?? null;
        $self->startDate = $data['startDate'] ?? null;

        $self->wweiaFoodCategory = isset($data['wweiaFoodCategory'])
            ? WweiaFoodCategory::createFromArray($data['wweiaFoodCategory'])
            : null;

        if (isset($data['foodAttributes']) && \is_array($data['foodAttributes'])) {
            foreach ($data['foodAttributes'] as $foodAttributesData) {
                $self->foodAttributes[] = FoodAttribute::createFromArray($foodAttributesData);
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

        return $self;
    }
}
