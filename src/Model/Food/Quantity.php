<?php

namespace MarcOrtola\FoodDataCentral\Model\Food;

use PhpUnitsOfMeasure\PhysicalQuantityInterface;

final class Quantity implements PhysicalQuantityInterface
{
    private PhysicalQuantityInterface $physicalQuantity;

    public function __construct(PhysicalQuantityInterface $physicalQuantity)
    {
        $this->physicalQuantity = $physicalQuantity;
    }

    public function toUnit($unit): float
    {
        return $this->physicalQuantity->toUnit($unit);
    }

    public function toNativeUnit(): float
    {
        return $this->physicalQuantity->toNativeUnit();
    }

    public function __toString(): string
    {
        return $this->physicalQuantity->__toString();
    }

    public function add(PhysicalQuantityInterface $quantity): PhysicalQuantityInterface
    {
        return $this->physicalQuantity->add($quantity);
    }

    public function subtract(PhysicalQuantityInterface $quantity): PhysicalQuantityInterface
    {
        return $this->physicalQuantity->subtract($quantity);
    }

    public function isEquivalentQuantity(PhysicalQuantityInterface $testQuantity): bool
    {
        return $this->physicalQuantity->isEquivalentQuantity($testQuantity);
    }

    public function getUnit(): string
    {
        $guessedUnit = strrchr((string) $this->physicalQuantity, ' ');

        if ($guessedUnit === false) {
            throw new \UnexpectedValueException();
        }

        return substr($guessedUnit, 1);
    }

    public function getPhysicalQuantityClass(): string
    {
        return \get_class($this->physicalQuantity);
    }
}
