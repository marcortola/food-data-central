<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class FoodNutrient implements CreatableFromArray
{
    private int $id;
    private ?float $amount;
    private ?int $dataPoints;
    private ?float $min;
    private ?float $max;
    private ?float $median;
    private ?string $type;
    private ?Nutrient $nutrient;
    private ?FoodNutrientDerivation $foodNutrientDerivation;
    private ?NutrientAnalysisDetails $nutrientAnalysisDetails;

    private function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function getDataPoints(): ?int
    {
        return $this->dataPoints;
    }

    public function getMin(): ?float
    {
        return $this->min;
    }

    public function getMax(): ?float
    {
        return $this->max;
    }

    public function getMedian(): ?float
    {
        return $this->median;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getNutrient(): ?Nutrient
    {
        return $this->nutrient;
    }

    public function getFoodNutrientDerivation(): ?FoodNutrientDerivation
    {
        return $this->foodNutrientDerivation;
    }

    public function getNutrientAnalysisDetails(): ?NutrientAnalysisDetails
    {
        return $this->nutrientAnalysisDetails;
    }

    public static function createFromArray(array $data): self
    {
        if (!isset($data['id'])) {
            throw new \InvalidArgumentException();
        }

        $self = new self($data['id']);

        $self->amount = $data['amount'] ?? null;
        $self->dataPoints = $data['dataPoints'] ?? null;
        $self->min = $data['min'] ?? null;
        $self->max = $data['max'] ?? null;
        $self->median = $data['median'] ?? null;
        $self->type = $data['type'] ?? null;

        $self->nutrient = isset($data['nutrient'])
            ? Nutrient::createFromArray($data['nutrient'])
            : null;

        $self->foodNutrientDerivation = isset($data['foodNutrientDerivation'])
            ? FoodNutrientDerivation::createFromArray($data['foodNutrientDerivation'])
            : null;

        $self->nutrientAnalysisDetails = isset($data['nutrientAnalysisDetails'])
            ? NutrientAnalysisDetails::createFromArray($data['nutrientAnalysisDetails'])
            : null;

        return $self;
    }
}
