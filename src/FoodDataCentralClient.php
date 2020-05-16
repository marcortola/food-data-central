<?php

namespace MarcOrtola\FoodDataCentral;

use Http\Discovery\Psr18ClientDiscovery;
use MarcOrtola\FoodDataCentral\Api\FoodApi;
use MarcOrtola\FoodDataCentral\Hydrator\Hydrator;
use MarcOrtola\FoodDataCentral\Hydrator\ModelHydrator;
use Psr\Http\Client\ClientInterface;

final class FoodDataCentralClient
{
    private ClientInterface $httpClient;
    private RequestBuilder $requestBuilder;
    private Hydrator $hydrator;

    public function __construct(
        ClientInterface $httpClient,
        RequestBuilder $requestBuilder,
        ?Hydrator $hydrator = null
    ) {
        $this->httpClient = $httpClient;
        $this->requestBuilder = $requestBuilder;
        $this->hydrator = $hydrator ?? new ModelHydrator();
    }

    public function food(): FoodApi
    {
        return new FoodApi($this->httpClient, $this->requestBuilder, $this->hydrator);
    }

    public static function create(string $apiKey, ?ClientInterface $httpClient = null): self
    {
        return new self(
            $httpClient ?? Psr18ClientDiscovery::find(),
            new RequestBuilder($apiKey)
        );
    }
}
