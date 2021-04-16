<?php

namespace App;

use App\ProductFilteringStrategy;

class ProductCollection
{
    private array $collection;

    public function __construct(array $collection)
    {
        $this->collection = $collection;
    }

    public function getProductsArray(): array
    {
        return $this->collection;
    }

    public function filter(ProductFilteringStrategy $filterStrategy): ProductCollection
    {
        $filtrationResult = $filterStrategy->filter($this->collection);
        return new ProductCollection((array)$filtrationResult);
    }
}
