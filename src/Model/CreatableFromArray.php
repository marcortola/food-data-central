<?php declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model;

interface CreatableFromArray
{
    /**
     * @param mixed[] $data
     * @return mixed
     */
    public static function createFromArray(array $data);
}
