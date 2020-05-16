<?php declare(strict_types=1);

namespace MarcOrtola\FoodDataCentral\Hydrator;

use Psr\Http\Message\ResponseInterface;

interface Hydrator
{
    /**
     * @return mixed
     */
    public function hydrate(ResponseInterface $response, string $class);
}
