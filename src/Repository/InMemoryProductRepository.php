<?php

namespace App\Repository;

use ZipzoftInterview\ShoppingCart\Entity\ProductEntity;


class InMemoryProductRepository implements ProductRepository
{

    /**
     * Get all products
     * 
     * @return ProductEntity[]
     */
    public function all()
    {
        // Sleep for 5 second to simulate a slow database
        // Don't edit or remove this line
        sleep(5);

        return [
            ProductEntity::fromArray([
                'id' => 1,
                'name' => 'Earthen Bottle',
                'price' => 35.00,
                'image_url' => 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg',
            ]),
            ProductEntity::fromArray([
                'id' => 2,
                'name' => 'Nomad Tumbler',
                'price' => 48.00,
                'image_url' => 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg',
            ]),
            ProductEntity::fromArray([
                'id' => 3,
                'name' => 'Focus Paper Refill',
                'price' => 39.00,
                'image_url' => 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg',
            ]),
            ProductEntity::fromArray([
                'id' => 4,
                'name' => 'Machined Mechanical Pencil',
                'price' => 34.00,
                'image_url' => 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg',
            ]),
        ];
    }
}
