<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class AbridgedFoodItem implements FoodItem, CreatableFromArray
{
    private int $fdcId;
    private string $dataType;
    private string $description;
    private ?string $publicationDate;
    private ?string $brandOwner;
    private ?string $gtinUpc;
    private ?string $ndbNumber;
    private ?string $foodCode;
    /**
     * @var array<AbridgedFoodNutrient>
     */
    private array $foodNutrients = [];

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

    /**
     * @return array<AbridgedFoodNutrient>
     */
    public function getFoodNutrients(): array
    {
        return $this->foodNutrients;
    }

    public static function createFromArray(array $data): self
    {
        if (!isset($data['fdcId'], $data['dataType'], $data['description'])) {
            throw new \InvalidArgumentException();
        }

        $self = new self($data['fdcId'], $data['dataType'], $data['description']);

        $self->publicationDate = $data['publicationDate'] ?? null;
        $self->brandOwner = $data['brandOwner'] ?? null;
        $self->gtinUpc = $data['gtinUpc'] ?? null;
        $self->ndbNumber = $data['ndbNumber'] ?? null;
        $self->foodCode = $data['foodCode'] ?? null;

        if (isset($data['foodNutrients']) && \is_array($data['foodNutrients'])) {
            foreach ($data['foodNutrients'] as $foodNutrientData) {
                $self->foodNutrients[] = AbridgedFoodNutrient::createFromArray($foodNutrientData);
            }
        }

        return $self;
    }
}
