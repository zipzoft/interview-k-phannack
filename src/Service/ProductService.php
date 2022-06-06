<?php

namespace App\Service;

use App\Repository\ProductRepository;
use App\Repository\CacheJsonRepository;
use App\Repository\InMemoryProductRepository;
use App\ProductRepositoryCacheAdapter;

class ProductService
{

    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * @param ProductRepository $repository
     */
    public function __construct()
    {
        $this->repository = new ProductRepositoryCacheAdapter(
            new InMemoryProductRepository(),
            new CacheJsonRepository(),
            'products',
        );
    }

    /**
     * Get all products
     *
     * @return ProductEntity[]
     */
    public function all(): array
    {
        return $this->repository->all();
    }
}
