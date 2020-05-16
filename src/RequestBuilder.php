<?php declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral;

use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;

final class RequestBuilder
{
    private string $baseUri = 'https://api.nal.usda.gov/fdc';
    private RequestFactoryInterface $requestFactory;
    private string $apiKey;

    public function __construct(string $apiKey, ?RequestFactoryInterface $requestFactory = null)
    {
        $this->apiKey = $apiKey;
        $this->requestFactory = $requestFactory ?? Psr17FactoryDiscovery::findRequestFactory();
    }

    /**
     * @param string[] $headers
     */
    public function create(
        string $method,
        string $path,
        array $headers = []
    ): RequestInterface {
        $request = $this->requestFactory->createRequest($method, $this->baseUri.$path);
        $request = $request->withHeader('X-Api-Key', $this->apiKey);

        foreach ($headers as $header => $value) {
            $request = $request->withHeader($header, $value);
        }

        return $request;
    }
}
