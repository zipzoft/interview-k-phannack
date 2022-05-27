<?php

namespace App\Repository;

use ZipzoftInterview\ShoppingCart\Entity\ProductEntity;

interface ProductRepository
{

    /**
     * Get all products
     * 
     * @return ProductEntity[]
     */
    public function all();
}
