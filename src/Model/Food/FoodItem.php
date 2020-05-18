<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

interface FoodItem
{
    public function getFdcId(): int;

    public function getDataType(): string;

    public function getDescription(): string;

    public function getAlanine(): ?FoodNutrient;

    public function getAlcohol(): ?FoodNutrient;

    public function getArginine(): ?FoodNutrient;

    public function getAsh(): ?FoodNutrient;

    public function getAsparticAcid(): ?FoodNutrient;

    public function getBetaSitosterol(): ?FoodNutrient;

    public function getBetaine(): ?FoodNutrient;

    public function getCaffeine(): ?FoodNutrient;

    public function getCalcium(): ?FoodNutrient;

    public function getCampesterol(): ?FoodNutrient;

    public function getCarbohydrate(): ?FoodNutrient;

    public function getAlphaCarotene(): ?FoodNutrient;

    public function getBetaCarotene(): ?FoodNutrient;

    public function getCholesterol(): ?FoodNutrient;

    public function getCholine(): ?FoodNutrient;

    public function getCopper(): ?FoodNutrient;

    public function getCryptoxanthin(): ?FoodNutrient;

    public function getCystine(): ?FoodNutrient;

    public function getEnergy(): ?FoodNutrient;

    public function getMonounsaturatedFat(): ?FoodNutrient;

    public function getPolyunsaturatedFat(): ?FoodNutrient;

    public function getSaturatedFat(): ?FoodNutrient;

    public function getTransFat(): ?FoodNutrient;

    public function getFiber(): ?FoodNutrient;

    public function getFluoride(): ?FoodNutrient;

    public function getFolate(): ?FoodNutrient;

    public function getFolicAcid(): ?FoodNutrient;

    public function getFructose(): ?FoodNutrient;

    public function getGalactose(): ?FoodNutrient;

    public function getGlucose(): ?FoodNutrient;

    public function getGlutamicAcid(): ?FoodNutrient;

    public function getGlycine(): ?FoodNutrient;

    public function getHistidine(): ?FoodNutrient;

    public function getHydroxyproline(): ?FoodNutrient;

    public function getIron(): ?FoodNutrient;

    public function getIsoleucine(): ?FoodNutrient;

    public function getLactose(): ?FoodNutrient;

    public function getLeucine(): ?FoodNutrient;

    public function getLuteinPlusZeaxanthin(): ?FoodNutrient;

    public function getLycopene(): ?FoodNutrient;

    public function getLysine(): ?FoodNutrient;

    public function getMagnesium(): ?FoodNutrient;

    public function getMaltose(): ?FoodNutrient;

    public function getManganese(): ?FoodNutrient;

    public function getMethionine(): ?FoodNutrient;

    public function getNiacin(): ?FoodNutrient;

    public function getPantothenicAcid(): ?FoodNutrient;

    public function getPhenylalanine(): ?FoodNutrient;

    public function getPhosphorus(): ?FoodNutrient;

    public function getPhytosterols(): ?FoodNutrient;

    public function getPotassium(): ?FoodNutrient;

    public function getProline(): ?FoodNutrient;

    public function getProtein(): ?FoodNutrient;

    public function getRetinol(): ?FoodNutrient;

    public function getRiboflavin(): ?FoodNutrient;

    public function getSelenium(): ?FoodNutrient;

    public function getSerine(): ?FoodNutrient;

    public function getSodium(): ?FoodNutrient;

    public function getStarch(): ?FoodNutrient;

    public function getStigmasterol(): ?FoodNutrient;

    public function getSucrose(): ?FoodNutrient;

    public function getSugars(): ?FoodNutrient;

    public function getTheobromine(): ?FoodNutrient;

    public function getThiamin(): ?FoodNutrient;

    public function getThreonine(): ?FoodNutrient;

    public function getBetaTocopherol(): ?FoodNutrient;

    public function getDeltaTocopherol(): ?FoodNutrient;

    public function getGammaTocopherol(): ?FoodNutrient;

    public function getAlphaTocotrienol(): ?FoodNutrient;

    public function getBetaTocotrienol(): ?FoodNutrient;

    public function getDeltaTocotrienol(): ?FoodNutrient;

    public function getGammaTocotrienol(): ?FoodNutrient;

    public function getFat(): ?FoodNutrient;

    public function getTryptophan(): ?FoodNutrient;

    public function getTyrosine(): ?FoodNutrient;

    public function getValine(): ?FoodNutrient;

    public function getVitaminA(): ?FoodNutrient;

    public function getVitaminB12(): ?FoodNutrient;

    public function getVitaminB6(): ?FoodNutrient;

    public function getVitaminC(): ?FoodNutrient;

    public function getVitaminD(): ?FoodNutrient;

    public function getVitaminD2(): ?FoodNutrient;

    public function getVitaminD3(): ?FoodNutrient;

    public function getVitaminE(): ?FoodNutrient;

    public function getVitaminK(): ?FoodNutrient;

    public function getWater(): ?FoodNutrient;

    public function getZinc(): ?FoodNutrient;
}
