<?php

declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Api;

use MarcOrtola\FoodDataCentral\Exception\Domain\DomainException;
use MarcOrtola\FoodDataCentral\Model\Food\FoodItem;
use MarcOrtola\FoodDataCentral\Model\Food\FoodItemFactory;
use Psr\Http\Client\ClientExceptionInterface;

final class FoodApi extends Api
{
    /**
     * @see https://fdc.nal.usda.gov/api-spec/fdc_api.html#/FDC/getFood
     * @throws DomainException
     * @throws ClientExceptionInterface
     */
    public function food(int $fdcId): FoodItem
    {
        $response = $this->httpGet('/v1/food/'.$fdcId);

        return $this->handleResponse($response, FoodItemFactory::class);
    }
}
