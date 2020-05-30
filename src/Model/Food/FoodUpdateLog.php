<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class FoodUpdateLog implements CreatableFromArray
{
    private ?int $fdcId;
    private ?string $availableDate;
    private ?string $brandOwner;
    private ?string $dataSource;
    private ?string $dataType;
    private ?string $description;
    private ?string $foodClass;
    private ?string $gtinUpc;
    private ?string $householdServingFullText;
    private ?string $ingredients;
    private ?string $modifiedDate;
    private ?string $publicationDate;
    private ?float $servingSize;
    private ?string $servingSizeUnit;
    private ?string $brandedFoodCategory;
    private ?string $changes;
    /**
     * @var array<FoodAttribute>
     */
    private array $foodAttributes = [];

    public function getFdcId(): ?int
    {
        return $this->fdcId;
    }

    public function getAvailableDate(): ?string
    {
        return $this->availableDate;
    }

    public function getBrandOwner(): ?string
    {
        return $this->brandOwner;
    }

    public function getDataSource(): ?string
    {
        return $this->dataSource;
    }

    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getFoodClass(): ?string
    {
        return $this->foodClass;
    }

    public function getGtinUpc(): ?string
    {
        return $this->gtinUpc;
    }

    public function getHouseholdServingFullText(): ?string
    {
        return $this->householdServingFullText;
    }

    public function getIngredients(): ?string
    {
        return $this->ingredients;
    }

    public function getModifiedDate(): ?string
    {
        return $this->modifiedDate;
    }

    public function getPublicationDate(): ?string
    {
        return $this->publicationDate;
    }

    public function getServingSize(): ?float
    {
        return $this->servingSize;
    }

    public function getServingSizeUnit(): ?string
    {
        return $this->servingSizeUnit;
    }

    public function getBrandedFoodCategory(): ?string
    {
        return $this->brandedFoodCategory;
    }

    public function getChanges(): ?string
    {
        return $this->changes;
    }

    /**
     * @return array<FoodAttribute>
     */
    public function getFoodAttributes(): array
    {
        return $this->foodAttributes;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->fdcId = $data['fdcId'] ?? null;
        $self->availableDate = $data['availableDate'] ?? null;
        $self->brandOwner = $data['brandOwner'] ?? null;
        $self->dataSource = $data['dataSource'] ?? null;
        $self->dataType = $data['dataType'] ?? null;
        $self->description = $data['description'] ?? null;
        $self->foodClass = $data['foodClass'] ?? null;
        $self->gtinUpc = $data['gtinUpc'] ?? null;
        $self->householdServingFullText = $data['householdServingFullText'] ?? null;
        $self->ingredients = $data['ingredients'] ?? null;
        $self->modifiedDate = $data['modifiedDate'] ?? null;
        $self->publicationDate = $data['publicationDate'] ?? null;
        $self->servingSize = $data['servingSize'] ?? null;
        $self->servingSizeUnit = $data['servingSizeUnit'] ?? null;
        $self->brandedFoodCategory = $data['brandedFoodCategory'] ?? null;
        $self->changes = $data['changes'] ?? null;

        if (isset($data['foodAttributes']) && \is_array($data['foodAttributes'])) {
            foreach ($data['foodAttributes'] as $foodAttributesData) {
                $self->foodAttributes[] = FoodAttribute::createFromArray($foodAttributesData);
            }
        }

        return $self;
    }
}
