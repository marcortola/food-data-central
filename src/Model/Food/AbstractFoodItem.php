<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

abstract class AbstractFoodItem implements FoodItem, CreatableFromArray
{
    private int $fdcId;
    private string $dataType;
    private string $description;
    /**
     * @var array<FoodNutrient>
     */
    private array $foodNutrients;

    final protected function __construct(int $fdcId, string $dataType, string $description)
    {
        $this->fdcId = $fdcId;
        $this->dataType = $dataType;
        $this->description = $description;
        $this->foodNutrients = [];
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

    /**
     * @return array<FoodNutrient>
     */
    public function getFoodNutrients(): array
    {
        return $this->foodNutrients;
    }

    public static function createFromArray(array $data)
    {
        if (!isset($data['fdcId'], $data['dataType'])) {
            throw new \InvalidArgumentException();
        }

        $self = new static($data['fdcId'], $data['dataType'], $data['description'] ?? '');

        if (isset($data['foodNutrients']) && \is_array($data['foodNutrients'])) {
            foreach ($data['foodNutrients'] as $foodNutrientData) {
                $self->foodNutrients[] = FoodNutrient::createFromArray($foodNutrientData);
            }
        }

        return $self;
    }

    public function getAlanine(): ?Nutrient
    {
        return $this->getNutrient(513);
    }

    public function getAlcohol(): ?Nutrient
    {
        return $this->getNutrient(221);
    }

    public function getArginine(): ?Nutrient
    {
        return $this->getNutrient(511);
    }

    public function getAsh(): ?Nutrient
    {
        return $this->getNutrient(207);
    }

    public function getAsparticAcid(): ?Nutrient
    {
        return $this->getNutrient(514);
    }

    public function getBetaSitosterol(): ?Nutrient
    {
        return $this->getNutrient(641);
    }

    public function getBetaine(): ?Nutrient
    {
        return $this->getNutrient(454);
    }

    public function getCaffeine(): ?Nutrient
    {
        return $this->getNutrient(262);
    }

    public function getCalcium(): ?Nutrient
    {
        return $this->getNutrient(301);
    }

    public function getCampesterol(): ?Nutrient
    {
        return $this->getNutrient(639);
    }

    public function getCarbohydrate(): ?Nutrient
    {
        return $this->getNutrient(205);
    }

    public function getAlphaCarotene(): ?Nutrient
    {
        return $this->getNutrient(322);
    }

    public function getBetaCarotene(): ?Nutrient
    {
        return $this->getNutrient(321);
    }

    public function getCholesterol(): ?Nutrient
    {
        return $this->getNutrient(601);
    }

    public function getCholine(): ?Nutrient
    {
        return $this->getNutrient(421);
    }

    public function getCopper(): ?Nutrient
    {
        return $this->getNutrient(312);
    }

    public function getCryptoxanthin(): ?Nutrient
    {
        return $this->getNutrient(334);
    }

    public function getCystine(): ?Nutrient
    {
        return $this->getNutrient(507);
    }

    public function getEnergy(): ?Nutrient
    {
        return $this->getNutrient(208);
    }

    public function getMonounsaturatedFat(): ?Nutrient
    {
        return $this->getNutrient(645);
    }

    public function getPolyunsaturatedFat(): ?Nutrient
    {
        return $this->getNutrient(646);
    }

    public function getSaturatedFat(): ?Nutrient
    {
        return $this->getNutrient(606);
    }

    public function getTransFat(): ?Nutrient
    {
        return $this->getNutrient(605);
    }

    public function getFiber(): ?Nutrient
    {
        return $this->getNutrient(291);
    }

    public function getFluoride(): ?Nutrient
    {
        return $this->getNutrient(313);
    }

    public function getFolate(): ?Nutrient
    {
        return $this->getNutrient(417);
    }

    public function getFolicAcid(): ?Nutrient
    {
        return $this->getNutrient(431);
    }

    public function getFructose(): ?Nutrient
    {
        return $this->getNutrient(212);
    }

    public function getGalactose(): ?Nutrient
    {
        return $this->getNutrient(287);
    }

    public function getGlucose(): ?Nutrient
    {
        return $this->getNutrient(211);
    }

    public function getGlutamicAcid(): ?Nutrient
    {
        return $this->getNutrient(515);
    }

    public function getGlycine(): ?Nutrient
    {
        return $this->getNutrient(516);
    }

    public function getHistidine(): ?Nutrient
    {
        return $this->getNutrient(512);
    }

    public function getHydroxyproline(): ?Nutrient
    {
        return $this->getNutrient(521);
    }

    public function getIron(): ?Nutrient
    {
        return $this->getNutrient(303);
    }

    public function getIsoleucine(): ?Nutrient
    {
        return $this->getNutrient(503);
    }

    public function getLactose(): ?Nutrient
    {
        return $this->getNutrient(213);
    }

    public function getLeucine(): ?Nutrient
    {
        return $this->getNutrient(504);
    }

    public function getLuteinPlusZeaxanthin(): ?Nutrient
    {
        return $this->getNutrient(338);
    }

    public function getLycopene(): ?Nutrient
    {
        return $this->getNutrient(337);
    }

    public function getLysine(): ?Nutrient
    {
        return $this->getNutrient(505);
    }

    public function getMagnesium(): ?Nutrient
    {
        return $this->getNutrient(304);
    }

    public function getMaltose(): ?Nutrient
    {
        return $this->getNutrient(214);
    }

    public function getManganese(): ?Nutrient
    {
        return $this->getNutrient(315);
    }

    public function getMethionine(): ?Nutrient
    {
        return $this->getNutrient(506);
    }

    public function getNiacin(): ?Nutrient
    {
        return $this->getNutrient(406);
    }

    public function getPantothenicAcid(): ?Nutrient
    {
        return $this->getNutrient(410);
    }

    public function getPhenylalanine(): ?Nutrient
    {
        return $this->getNutrient(508);
    }

    public function getPhosphorus(): ?Nutrient
    {
        return $this->getNutrient(305);
    }

    public function getPhytosterols(): ?Nutrient
    {
        return $this->getNutrient(636);
    }

    public function getPotassium(): ?Nutrient
    {
        return $this->getNutrient(306);
    }

    public function getProline(): ?Nutrient
    {
        return $this->getNutrient(517);
    }

    public function getProtein(): ?Nutrient
    {
        return $this->getNutrient(203);
    }

    public function getRetinol(): ?Nutrient
    {
        return $this->getNutrient(319);
    }

    public function getRiboflavin(): ?Nutrient
    {
        return $this->getNutrient(405);
    }

    public function getSelenium(): ?Nutrient
    {
        return $this->getNutrient(317);
    }

    public function getSerine(): ?Nutrient
    {
        return $this->getNutrient(518);
    }

    public function getSodium(): ?Nutrient
    {
        return $this->getNutrient(307);
    }

    public function getStarch(): ?Nutrient
    {
        return $this->getNutrient(209);
    }

    public function getStigmasterol(): ?Nutrient
    {
        return $this->getNutrient(638);
    }

    public function getSucrose(): ?Nutrient
    {
        return $this->getNutrient(210);
    }

    public function getSugars(): ?Nutrient
    {
        return $this->getNutrient(269);
    }

    public function getTheobromine(): ?Nutrient
    {
        return $this->getNutrient(263);
    }

    public function getThiamin(): ?Nutrient
    {
        return $this->getNutrient(404);
    }

    public function getThreonine(): ?Nutrient
    {
        return $this->getNutrient(502);
    }

    public function getBetaTocopherol(): ?Nutrient
    {
        return $this->getNutrient(341);
    }

    public function getDeltaTocopherol(): ?Nutrient
    {
        return $this->getNutrient(343);
    }

    public function getGammaTocopherol(): ?Nutrient
    {
        return $this->getNutrient(342);
    }

    public function getAlphaTocotrienol(): ?Nutrient
    {
        return $this->getNutrient(344);
    }

    public function getBetaTocotrienol(): ?Nutrient
    {
        return $this->getNutrient(345);
    }

    public function getDeltaTocotrienol(): ?Nutrient
    {
        return $this->getNutrient(347);
    }

    public function getGammaTocotrienol(): ?Nutrient
    {
        return $this->getNutrient(346);
    }

    public function getFat(): ?Nutrient
    {
        return $this->getNutrient(204);
    }

    public function getTryptophan(): ?Nutrient
    {
        return $this->getNutrient(501);
    }

    public function getTyrosine(): ?Nutrient
    {
        return $this->getNutrient(509);
    }

    public function getValine(): ?Nutrient
    {
        return $this->getNutrient(510);
    }

    public function getVitaminA(): ?Nutrient
    {
        return $this->getNutrient(320);
    }

    public function getVitaminB12(): ?Nutrient
    {
        return $this->getNutrient(418);
    }

    public function getVitaminB6(): ?Nutrient
    {
        return $this->getNutrient(415);
    }

    public function getVitaminC(): ?Nutrient
    {
        return $this->getNutrient(401);
    }

    public function getVitaminD(): ?Nutrient
    {
        return $this->getNutrient(328);
    }

    public function getVitaminD2(): ?Nutrient
    {
        return $this->getNutrient(325);
    }

    public function getVitaminD3(): ?Nutrient
    {
        return $this->getNutrient(326);
    }

    public function getVitaminE(): ?Nutrient
    {
        return $this->getNutrient(323);
    }

    public function getVitaminK(): ?Nutrient
    {
        return $this->getNutrient(430);
    }

    public function getWater(): ?Nutrient
    {
        return $this->getNutrient(255);
    }

    public function getZinc(): ?Nutrient
    {
        return $this->getNutrient(309);
    }

    private function getNutrient(int $id): ?Nutrient
    {
        foreach ($this->getFoodNutrients() as $foodNutrient) {
            if ($foodNutrient->isNutrient($id)) {
                return $foodNutrient->getNutrient();
            }
        }

        return null;
    }
}
