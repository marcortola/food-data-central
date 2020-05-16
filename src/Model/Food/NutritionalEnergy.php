<?php

namespace MarcOrtola\FoodDataCentral\Model\Food;

use PhpUnitsOfMeasure\Exception\DuplicateUnitNameOrAlias;
use PhpUnitsOfMeasure\Exception\NonStringUnitName;
use PhpUnitsOfMeasure\PhysicalQuantity\Energy;
use PhpUnitsOfMeasure\PhysicalQuantityInterface;
use PhpUnitsOfMeasure\UnitOfMeasure;
use PhpUnitsOfMeasure\UnitOfMeasureInterface;

class NutritionalEnergy extends Energy implements PhysicalQuantityInterface
{
    /**
     * @var array<UnitOfMeasureInterface>
     */
    protected static $unitDefinitions;

    /**
     * @throws DuplicateUnitNameOrAlias
     * @throws NonStringUnitName
     */
    protected static function initialize(): void
    {
        parent::initialize();

        $kcal = new UnitOfMeasure(
            'kcal',
            function ($valueInNativeUnit) {
                return $valueInNativeUnit / 4184;
            },
            function ($valueInThisUnit) {
                return $valueInThisUnit * 4184;
            }
        );

        if (!static::unitNameOrAliasesAlreadyRegistered($kcal)) {
            static::addUnit($kcal);
        }
    }
}
