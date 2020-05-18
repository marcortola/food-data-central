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

    public function getAlanine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(513);
    }

    public function getAlcohol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(221);
    }

    public function getArginine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(511);
    }

    public function getAsh(): ?FoodNutrient
    {
        return $this->getFoodNutrient(207);
    }

    public function getAsparticAcid(): ?FoodNutrient
    {
        return $this->getFoodNutrient(514);
    }

    public function getBetaSitosterol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(641);
    }

    public function getBetaine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(454);
    }

    public function getCaffeine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(262);
    }

    public function getCalcium(): ?FoodNutrient
    {
        return $this->getFoodNutrient(301);
    }

    public function getCampesterol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(639);
    }

    public function getCarbohydrate(): ?FoodNutrient
    {
        return $this->getFoodNutrient(205);
    }

    public function getAlphaCarotene(): ?FoodNutrient
    {
        return $this->getFoodNutrient(322);
    }

    public function getBetaCarotene(): ?FoodNutrient
    {
        return $this->getFoodNutrient(321);
    }

    public function getCholesterol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(601);
    }

    public function getCholine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(421);
    }

    public function getCopper(): ?FoodNutrient
    {
        return $this->getFoodNutrient(312);
    }

    public function getCryptoxanthin(): ?FoodNutrient
    {
        return $this->getFoodNutrient(334);
    }

    public function getCystine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(507);
    }

    public function getEnergy(): ?FoodNutrient
    {
        return $this->getFoodNutrient(208);
    }

    public function getMonounsaturatedFat(): ?FoodNutrient
    {
        return $this->getFoodNutrient(645);
    }

    public function getPolyunsaturatedFat(): ?FoodNutrient
    {
        return $this->getFoodNutrient(646);
    }

    public function getSaturatedFat(): ?FoodNutrient
    {
        return $this->getFoodNutrient(606);
    }

    public function getTransFat(): ?FoodNutrient
    {
        return $this->getFoodNutrient(605);
    }

    public function getFiber(): ?FoodNutrient
    {
        return $this->getFoodNutrient(291);
    }

    public function getFluoride(): ?FoodNutrient
    {
        return $this->getFoodNutrient(313);
    }

    public function getFolate(): ?FoodNutrient
    {
        return $this->getFoodNutrient(417);
    }

    public function getFolicAcid(): ?FoodNutrient
    {
        return $this->getFoodNutrient(431);
    }

    public function getFructose(): ?FoodNutrient
    {
        return $this->getFoodNutrient(212);
    }

    public function getGalactose(): ?FoodNutrient
    {
        return $this->getFoodNutrient(287);
    }

    public function getGlucose(): ?FoodNutrient
    {
        return $this->getFoodNutrient(211);
    }

    public function getGlutamicAcid(): ?FoodNutrient
    {
        return $this->getFoodNutrient(515);
    }

    public function getGlycine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(516);
    }

    public function getHistidine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(512);
    }

    public function getHydroxyproline(): ?FoodNutrient
    {
        return $this->getFoodNutrient(521);
    }

    public function getIron(): ?FoodNutrient
    {
        return $this->getFoodNutrient(303);
    }

    public function getIsoleucine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(503);
    }

    public function getLactose(): ?FoodNutrient
    {
        return $this->getFoodNutrient(213);
    }

    public function getLeucine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(504);
    }

    public function getLuteinPlusZeaxanthin(): ?FoodNutrient
    {
        return $this->getFoodNutrient(338);
    }

    public function getLycopene(): ?FoodNutrient
    {
        return $this->getFoodNutrient(337);
    }

    public function getLysine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(505);
    }

    public function getMagnesium(): ?FoodNutrient
    {
        return $this->getFoodNutrient(304);
    }

    public function getMaltose(): ?FoodNutrient
    {
        return $this->getFoodNutrient(214);
    }

    public function getManganese(): ?FoodNutrient
    {
        return $this->getFoodNutrient(315);
    }

    public function getMethionine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(506);
    }

    public function getNiacin(): ?FoodNutrient
    {
        return $this->getFoodNutrient(406);
    }

    public function getPantothenicAcid(): ?FoodNutrient
    {
        return $this->getFoodNutrient(410);
    }

    public function getPhenylalanine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(508);
    }

    public function getPhosphorus(): ?FoodNutrient
    {
        return $this->getFoodNutrient(305);
    }

    public function getPhytosterols(): ?FoodNutrient
    {
        return $this->getFoodNutrient(636);
    }

    public function getPotassium(): ?FoodNutrient
    {
        return $this->getFoodNutrient(306);
    }

    public function getProline(): ?FoodNutrient
    {
        return $this->getFoodNutrient(517);
    }

    public function getProtein(): ?FoodNutrient
    {
        return $this->getFoodNutrient(203);
    }

    public function getRetinol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(319);
    }

    public function getRiboflavin(): ?FoodNutrient
    {
        return $this->getFoodNutrient(405);
    }

    public function getSelenium(): ?FoodNutrient
    {
        return $this->getFoodNutrient(317);
    }

    public function getSerine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(518);
    }

    public function getSodium(): ?FoodNutrient
    {
        return $this->getFoodNutrient(307);
    }

    public function getStarch(): ?FoodNutrient
    {
        return $this->getFoodNutrient(209);
    }

    public function getStigmasterol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(638);
    }

    public function getSucrose(): ?FoodNutrient
    {
        return $this->getFoodNutrient(210);
    }

    public function getSugars(): ?FoodNutrient
    {
        return $this->getFoodNutrient(269);
    }

    public function getTheobromine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(263);
    }

    public function getThiamin(): ?FoodNutrient
    {
        return $this->getFoodNutrient(404);
    }

    public function getThreonine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(502);
    }

    public function getBetaTocopherol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(341);
    }

    public function getDeltaTocopherol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(343);
    }

    public function getGammaTocopherol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(342);
    }

    public function getAlphaTocotrienol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(344);
    }

    public function getBetaTocotrienol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(345);
    }

    public function getDeltaTocotrienol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(347);
    }

    public function getGammaTocotrienol(): ?FoodNutrient
    {
        return $this->getFoodNutrient(346);
    }

    public function getFat(): ?FoodNutrient
    {
        return $this->getFoodNutrient(204);
    }

    public function getTryptophan(): ?FoodNutrient
    {
        return $this->getFoodNutrient(501);
    }

    public function getTyrosine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(509);
    }

    public function getValine(): ?FoodNutrient
    {
        return $this->getFoodNutrient(510);
    }

    public function getVitaminA(): ?FoodNutrient
    {
        return $this->getFoodNutrient(320);
    }

    public function getVitaminB12(): ?FoodNutrient
    {
        return $this->getFoodNutrient(418);
    }

    public function getVitaminB6(): ?FoodNutrient
    {
        return $this->getFoodNutrient(415);
    }

    public function getVitaminC(): ?FoodNutrient
    {
        return $this->getFoodNutrient(401);
    }

    public function getVitaminD(): ?FoodNutrient
    {
        return $this->getFoodNutrient(328);
    }

    public function getVitaminD2(): ?FoodNutrient
    {
        return $this->getFoodNutrient(325);
    }

    public function getVitaminD3(): ?FoodNutrient
    {
        return $this->getFoodNutrient(326);
    }

    public function getVitaminE(): ?FoodNutrient
    {
        return $this->getFoodNutrient(323);
    }

    public function getVitaminK(): ?FoodNutrient
    {
        return $this->getFoodNutrient(430);
    }

    public function getWater(): ?FoodNutrient
    {
        return $this->getFoodNutrient(255);
    }

    public function getZinc(): ?FoodNutrient
    {
        return $this->getFoodNutrient(309);
    }

    private function getFoodNutrient(int $id): ?FoodNutrient
    {
        foreach ($this->getFoodNutrients() as $foodNutrient) {
            if ($foodNutrient->isNutrient($id)) {
                return $foodNutrient;
            }
        }

        return null;
    }
}
