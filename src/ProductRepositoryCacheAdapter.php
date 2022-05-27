<?php

namespace App;

use App\Repository\CacheRepository;
use App\Repository\ProductRepository;
use ZipzoftInterview\ShoppingCart\Entity\ProductEntity;

class ProductRepositoryCacheAdapter implements ProductRepository
{
    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * @var CacheRepository
     */
    private $cache;

    /**
     * @var string
     */
    private $cacheKey;

    /**
     * @param ProductRepository $repository
     * @param CacheRepository $cache
     */
    public function __construct(ProductRepository $repository, CacheRepository $cache, string $cacheKey)
    {
        $this->repository = $repository;
        $this->cache = $cache;
        $this->cacheKey = $cacheKey;
    }

    /**
     * Get all products
     */
    public function all(): array
    {
        if (!$this->cache->has($this->cacheKey)) {
            $products = $this->repository->all();

            $this->cache->set($this->cacheKey, $products);
        }

        // Map to ProductEntity
        $products = [];

        foreach ($this->cache->get($this->cacheKey) as $product) {
            $products[] = new ProductEntity($product);
        }

        return $products;
    }
}
