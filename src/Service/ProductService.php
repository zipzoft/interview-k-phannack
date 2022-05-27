<?php

namespace App\Service;

use App\Repository\ProductRepository;

class ProductService
{

    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * @param ProductRepository $repository
     */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
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
