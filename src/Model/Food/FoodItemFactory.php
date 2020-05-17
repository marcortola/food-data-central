<?php declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Model\Food;

use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;

class FoodItemFactory implements CreatableFromArray
{
    public static function createFromArray(array $data): FoodItem
    {
        if (isset($data['dataType'])) {
            switch ($data['dataType']) {
                case 'Branded':
                    return BrandedFoodItem::createFromArray($data);
                case 'Foundation':
                    return FoundationFoodItem::createFromArray($data);
                case 'Survey (FNDDS)':
                    return SurveyFoodItem::createFromArray($data);
                case 'SR Legacy':
                    return SRLegacyFoodItem::createFromArray($data);
            }
        }

        return AbridgedFoodItem::createFromArray($data);
    }
}
