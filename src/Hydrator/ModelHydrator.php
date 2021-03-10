<?php declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Hydrator;

use MarcOrtola\FoodDataCentral\Exception\HydrationException;
use MarcOrtola\FoodDataCentral\Model\CreatableFromArray;
use Psr\Http\Message\ResponseInterface;

final class ModelHydrator implements Hydrator
{
    public function hydrate(ResponseInterface $response, string $class)
    {
        if (0 !== strpos($response->getHeaderLine('Content-Type'), 'application/json')) {
            throw new HydrationException(
                'Cannot hydrate response with Content-Type: '.$response->getHeaderLine('Content-Type')
            );
        }

        $body = $response->getBody()->__toString();

        try {
            $data = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw new HydrationException(
                sprintf('Error (%d) when trying to json_decode response', $e->getMessage()),
                0,
                $e
            );
        }

        if (!is_subclass_of($class, CreatableFromArray::class)) {
            return new $class($data);
        }

        $callable = [$class, 'createFromArray'];

        if (\method_exists($class, 'createFromArray')) {
            return \call_user_func($callable, $data);
        }

        throw new HydrationException('Final hydrated object is not creable');
    }
}
