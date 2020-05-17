<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class FoodComponent implements CreatableFromArray
{
    private ?int $id;
    private ?string $name;
    private ?int $dataPoints;
    private ?float $gramWeight;
    private ?bool $isRefuse;
    private ?int $minYearAcquired;
    private ?float $percentWeight;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getDataPoints(): ?int
    {
        return $this->dataPoints;
    }

    public function getGramWeight(): ?float
    {
        return $this->gramWeight;
    }

    public function getIsRefuse(): ?bool
    {
        return $this->isRefuse;
    }

    public function getMinYearAcquired(): ?int
    {
        return $this->minYearAcquired;
    }

    public function getPercentWeight(): ?float
    {
        return $this->percentWeight;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->id = $data['id'] ?? null;
        $self->name = $data['name'] ?? null;
        $self->dataPoints = $data['dataPoints'] ?? null;
        $self->gramWeight = $data['gramWeight'] ?? null;
        $self->isRefuse = $data['isRefuse'] ?? null;
        $self->minYearAcquired = $data['minYearAcquired'] ?? null;
        $self->percentWeight = $data['percentWeight'] ?? null;

        return $self;
    }
}
