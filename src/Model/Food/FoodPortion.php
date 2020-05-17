<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class FoodPortion implements CreatableFromArray
{
    private ?int $id;
    private ?float $amount;
    private ?int $dataPoints;
    private ?float $gramWeight;
    private ?int $minYearAcquired;
    private ?string $modifier;
    private ?string $portionDescription;
    private ?int $sequenceNumber;
    private ?MeasureUnit $measureUnit;

    public function getId(): ?int
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

    public function getGramWeight(): ?float
    {
        return $this->gramWeight;
    }

    public function getMinYearAcquired(): ?int
    {
        return $this->minYearAcquired;
    }

    public function getModifier(): ?string
    {
        return $this->modifier;
    }

    public function getPortionDescription(): ?string
    {
        return $this->portionDescription;
    }

    public function getSequenceNumber(): ?int
    {
        return $this->sequenceNumber;
    }

    public function getMeasureUnit(): ?MeasureUnit
    {
        return $this->measureUnit;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->id = $data['id'] ?? null;
        $self->amount = $data['amount'] ?? null;
        $self->dataPoints = $data['dataPoints'] ?? null;
        $self->gramWeight = $data['gramWeight'] ?? null;
        $self->minYearAcquired = $data['minYearAcquired'] ?? null;
        $self->modifier = $data['modifier'] ?? null;
        $self->portionDescription = $data['portionDescription'] ?? null;
        $self->sequenceNumber = $data['sequenceNumber'] ?? null;

        $self->measureUnit = isset($data['measureUnit'])
            ? MeasureUnit::createFromArray($data['measureUnit'])
            : null;

        return $self;
    }
}
