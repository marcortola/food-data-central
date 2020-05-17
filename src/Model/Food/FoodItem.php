<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

interface FoodItem
{
    public function getFdcId(): int;

    public function getDataType(): string;

    public function getDescription(): string;

    public function getAlanine(): ?Nutrient;

    public function getAlcohol(): ?Nutrient;

    public function getArginine(): ?Nutrient;

    public function getAsh(): ?Nutrient;

    public function getAsparticAcid(): ?Nutrient;

    public function getBetaSitosterol(): ?Nutrient;

    public function getBetaine(): ?Nutrient;

    public function getCaffeine(): ?Nutrient;

    public function getCalcium(): ?Nutrient;

    public function getCampesterol(): ?Nutrient;

    public function getCarbohydrate(): ?Nutrient;

    public function getAlphaCarotene(): ?Nutrient;

    public function getBetaCarotene(): ?Nutrient;

    public function getCholesterol(): ?Nutrient;

    public function getCholine(): ?Nutrient;

    public function getCopper(): ?Nutrient;

    public function getCryptoxanthin(): ?Nutrient;

    public function getCystine(): ?Nutrient;

    public function getEnergy(): ?Nutrient;

    public function getMonounsaturatedFat(): ?Nutrient;

    public function getPolyunsaturatedFat(): ?Nutrient;

    public function getSaturatedFat(): ?Nutrient;

    public function getTransFat(): ?Nutrient;

    public function getFiber(): ?Nutrient;

    public function getFluoride(): ?Nutrient;

    public function getFolate(): ?Nutrient;

    public function getFolicAcid(): ?Nutrient;

    public function getFructose(): ?Nutrient;

    public function getGalactose(): ?Nutrient;

    public function getGlucose(): ?Nutrient;

    public function getGlutamicAcid(): ?Nutrient;

    public function getGlycine(): ?Nutrient;

    public function getHistidine(): ?Nutrient;

    public function getHydroxyproline(): ?Nutrient;

    public function getIron(): ?Nutrient;

    public function getIsoleucine(): ?Nutrient;

    public function getLactose(): ?Nutrient;

    public function getLeucine(): ?Nutrient;

    public function getLuteinPlusZeaxanthin(): ?Nutrient;

    public function getLycopene(): ?Nutrient;

    public function getLysine(): ?Nutrient;

    public function getMagnesium(): ?Nutrient;

    public function getMaltose(): ?Nutrient;

    public function getManganese(): ?Nutrient;

    public function getMethionine(): ?Nutrient;

    public function getNiacin(): ?Nutrient;

    public function getPantothenicAcid(): ?Nutrient;

    public function getPhenylalanine(): ?Nutrient;

    public function getPhosphorus(): ?Nutrient;

    public function getPhytosterols(): ?Nutrient;

    public function getPotassium(): ?Nutrient;

    public function getProline(): ?Nutrient;

    public function getProtein(): ?Nutrient;

    public function getRetinol(): ?Nutrient;

    public function getRiboflavin(): ?Nutrient;

    public function getSelenium(): ?Nutrient;

    public function getSerine(): ?Nutrient;

    public function getSodium(): ?Nutrient;

    public function getStarch(): ?Nutrient;

    public function getStigmasterol(): ?Nutrient;

    public function getSucrose(): ?Nutrient;

    public function getSugars(): ?Nutrient;

    public function getTheobromine(): ?Nutrient;

    public function getThiamin(): ?Nutrient;

    public function getThreonine(): ?Nutrient;

    public function getBetaTocopherol(): ?Nutrient;

    public function getDeltaTocopherol(): ?Nutrient;

    public function getGammaTocopherol(): ?Nutrient;

    public function getAlphaTocotrienol(): ?Nutrient;

    public function getBetaTocotrienol(): ?Nutrient;

    public function getDeltaTocotrienol(): ?Nutrient;

    public function getGammaTocotrienol(): ?Nutrient;

    public function getFat(): ?Nutrient;

    public function getTryptophan(): ?Nutrient;

    public function getTyrosine(): ?Nutrient;

    public function getValine(): ?Nutrient;

    public function getVitaminA(): ?Nutrient;

    public function getVitaminB12(): ?Nutrient;

    public function getVitaminB6(): ?Nutrient;

    public function getVitaminC(): ?Nutrient;

    public function getVitaminD(): ?Nutrient;

    public function getVitaminD2(): ?Nutrient;

    public function getVitaminD3(): ?Nutrient;

    public function getVitaminE(): ?Nutrient;

    public function getVitaminK(): ?Nutrient;

    public function getWater(): ?Nutrient;

    public function getZinc(): ?Nutrient;
}
