<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class InputFoodSurvey implements CreatableFromArray
{
    private ?int $id;
    private ?float $amount;
    private ?string $foodDescription;
    private ?int $ingredientCode;
    private ?string $ingredientDescription;
    private ?float $ingredientWeight;
    private ?string $portionCode;
    private ?string $portionDescription;
    private ?int $sequenceNumber;
    private ?int $surveyFlag;
    private ?string $unit;
    private ?SurveyFoodItem $inputFood;
    private ?RetentionFactor $retentionFactor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function getFoodDescription(): ?string
    {
        return $this->foodDescription;
    }

    public function getIngredientCode(): ?int
    {
        return $this->ingredientCode;
    }

    public function getIngredientDescription(): ?string
    {
        return $this->ingredientDescription;
    }

    public function getIngredientWeight(): ?float
    {
        return $this->ingredientWeight;
    }

    public function getPortionCode(): ?string
    {
        return $this->portionCode;
    }

    public function getPortionDescription(): ?string
    {
        return $this->portionDescription;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->sequenceNumber;
    }

    public function getSurveyFlag(): ?int
    {
        return $this->surveyFlag;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function getInputFood(): ?SurveyFoodItem
    {
        return $this->inputFood;
    }

    public function getRetentionFactor(): ?RetentionFactor
    {
        return $this->retentionFactor;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->id = $data['id'] ?? null;
        $self->amount = $data['amount'] ?? null;
        $self->foodDescription = $data['foodDescription'] ?? null;
        $self->ingredientCode = $data['ingredientCode'] ?? null;
        $self->ingredientDescription = $data['ingredientDescription'] ?? null;
        $self->ingredientWeight = $data['ingredientWeight'] ?? null;
        $self->portionCode = $data['portionCode'] ?? null;
        $self->portionDescription = $data['portionDescription'] ?? null;
        $self->sequenceNumber = $data['sequenceNumber'] ?? null;
        $self->surveyFlag = $data['surveyFlag'] ?? null;
        $self->unit = $data['unit'] ?? null;

        $self->inputFood = isset($data['inputFood'])
            ? SurveyFoodItem::createFromArray($data['inputFood'])
            : null;

        $self->retentionFactor = isset($data['retentionFactor'])
            ? RetentionFactor::createFromArray($data['retentionFactor'])
            : null;

        return $self;
    }
}
