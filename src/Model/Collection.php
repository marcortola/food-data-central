<?php declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model;

/**
 * @template T
 */
interface Collection
{
    /**
     * @return array<T>
     */
    public function toArray(): array;
}
