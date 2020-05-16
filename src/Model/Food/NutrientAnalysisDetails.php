<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

/**
 * @implements CreatableFromArray<self>
 */
final class NutrientAnalysisDetails implements CreatableFromArray
{
    private ?int $subSampleId;
    private ?float $amount;
    private ?int $nutrientId;
    private ?string $labMethodDescription;
    private ?string $labMethodOriginalDescription;
    private ?string $labMethodLink;
    /**
     * @var array<NutrientAcquisitionDetails>
     */
    private array $nutrientAcquisitionDetails = [];

    public function getSubSampleId(): ?int
    {
        return $this->subSampleId;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function getNutrientId(): ?int
    {
        return $this->nutrientId;
    }

    public function getLabMethodDescription(): ?string
    {
        return $this->labMethodDescription;
    }

    public function getLabMethodOriginalDescription(): ?string
    {
        return $this->labMethodOriginalDescription;
    }

    public function getLabMethodLink(): ?string
    {
        return $this->labMethodLink;
    }

    /**
     * @return array<NutrientAcquisitionDetails>
     */
    public function getNutrientAcquisitionDetails(): array
    {
        return $this->nutrientAcquisitionDetails;
    }

    public static function createFromArray(array $data): self
    {
        $self = new self();

        $self->subSampleId = $data['subSampleId'] ?? null;
        $self->amount = $data['amount'] ?? null;
        $self->nutrientId = $data['nutrientId'] ?? null;
        $self->labMethodDescription = $data['labMethodDescription'] ?? null;
        $self->labMethodOriginalDescription = $data['labMethodOriginalDescription'] ?? null;
        $self->labMethodLink = $data['labMethodLink'] ?? null;

        if (isset($data['nutrientAcquisitionDetails']) && \is_array($data['nutrientAcquisitionDetails'])) {
            foreach ($data['nutrientAcquisitionDetails'] as $nutrientAcquisitionDetailsData) {
                $self->nutrientAcquisitionDetails[] = NutrientAcquisitionDetails::createFromArray($nutrientAcquisitionDetailsData);
            }
        }

        return $self;
    }
}
