<?php declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model;

interface Arrayable
{
    /**
     * @return mixed[]
     */
    public function toArray(): array;
}
