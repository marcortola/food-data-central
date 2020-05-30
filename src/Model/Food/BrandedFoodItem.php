<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

final class BrandedFoodItem extends AbstractFoodItem implements CreatableFromArray
{
    private ?string $availableDate;
    private ?string $brandOwner;
    private ?string $dataSource;
    private ?string $foodClass;
    private ?string $gtinUpc;
    private ?string $householdServingFullText;
    private ?string $ingredients;
    private ?string $modifiedDate;
    private ?string $publicationDate;
    private ?int $servingSize;
    private ?string $servingSizeUnit;
    private ?string $brandedFoodCategory;
    /**
     * @var array<FoodUpdateLog>
     */
    private array $foodUpdateLog = [];
    /**
     * @var array<LabelNutrient>
     */
    private array $labelNutrients = [];

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

    public function getServingSize(): ?int
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

    /**
     * @return array<FoodUpdateLog>
     */
    public function getFoodUpdateLog(): array
    {
        return $this->foodUpdateLog;
    }

    /**
     * @return array<LabelNutrient>
     */
    public function getLabelNutrients(): array
    {
        return $this->labelNutrients;
    }

    public static function createFromArray(array $data): self
    {
        $self = parent::createFromArray($data);

        $self->publicationDate = $data['publicationDate'] ?? null;
        $self->brandOwner = $data['brandOwner'] ?? null;
        $self->gtinUpc = $data['gtinUpc'] ?? null;
        $self->availableDate = $data['availableDate'] ?? null;
        $self->dataSource = $data['dataSource'] ?? null;
        $self->foodClass = $data['foodClass'] ?? null;
        $self->householdServingFullText = $data['householdServingFullText'] ?? null;
        $self->ingredients = $data['ingredients'] ?? null;
        $self->modifiedDate = $data['modifiedDate'] ?? null;
        $self->servingSize = $data['servingSize'] ?? null;
        $self->servingSizeUnit = $data['servingSizeUnit'] ?? null;
        $self->brandedFoodCategory = $data['brandedFoodCategory'] ?? null;

        if (isset($data['foodUpdateLog']) && \is_array($data['foodUpdateLog'])) {
            foreach ($data['foodUpdateLog'] as $foodUpdateLogData) {
                $self->foodUpdateLog[] = FoodUpdateLog::createFromArray($foodUpdateLogData);
            }
        }

        if (isset($data['labelNutrients']) && \is_array($data['labelNutrients'])) {
            foreach ($data['labelNutrients'] as $labelNutrientsData) {
                $self->labelNutrients[] = LabelNutrient::createFromArray($labelNutrientsData);
            }
        }

        return $self;
    }
}
