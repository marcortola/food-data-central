<?php declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Api;

use MarcOrtola\FoodDataCentral\Exception\Domain\BadRequestException;
use MarcOrtola\FoodDataCentral\Exception\Domain\DomainException;
use MarcOrtola\FoodDataCentral\Exception\Domain\NotFoundException;
use MarcOrtola\FoodDataCentral\Exception\Domain\TooManyRequestsException;
use MarcOrtola\FoodDataCentral\Exception\Domain\UnauthorizedException;
use MarcOrtola\FoodDataCentral\Exception\Domain\UnknownException;
use MarcOrtola\FoodDataCentral\Hydrator\Hydrator;
use MarcOrtola\FoodDataCentral\Model\Collection;
use MarcOrtola\FoodDataCentral\RequestBuilder;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

abstract class Api
{
    protected ClientInterface $httpClient;
    protected RequestBuilder $requestBuilder;
    protected Hydrator $hydrator;

    public function __construct(
        ClientInterface $httpClient,
        RequestBuilder $requestBuilder,
        Hydrator $hydrator
    ) {
        $this->httpClient = $httpClient;
        $this->requestBuilder = $requestBuilder;
        $this->hydrator = $hydrator;
    }

    /**
     * @param array<string|int> $parameters
     * @param string[] $headers
     * @throws ClientExceptionInterface
     */
    protected function httpGet(string $path, array $parameters = [], array $headers = []): ResponseInterface
    {
        if (\count($parameters) > 0) {
            $path .= '?'.http_build_query($parameters);
        }

        $request = $this->requestBuilder->create('GET', $path, $headers);

        return $this->httpClient->sendRequest($request);
    }

    /**
     * @return mixed
     * @throws DomainException
     */
    protected function handleResponse(ResponseInterface $response, ?string $class = null)
    {
        $this->handleErrors($response);

        if (null === $class) {
            return $response->getBody()->__toString();
        }

        $response = $this->hydrator->hydrate($response, $class);

        if ($response instanceof Collection) {
            return $response->toArray();
        }

        return $response;
    }

    /**
     * @throws DomainException
     */
    protected function handleErrors(ResponseInterface $response): void
    {
        if (200 === $response->getStatusCode()) {
            return;
        }

        $message = $response->getBody()->__toString();

        switch ($response->getStatusCode()) {
            case 400:
                throw new BadRequestException($message);
            case 403:
                throw new UnauthorizedException($message);
            case 404:
                throw new NotFoundException($message);
            case 429:
                throw new TooManyRequestsException($message);
            default:
                throw new UnknownException($message);
        }
    }
}
