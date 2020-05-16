<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

interface FoodItem
{
    public function getFdcId(): int;

    public function getDataType(): string;

    public function getDescription(): string;
}
