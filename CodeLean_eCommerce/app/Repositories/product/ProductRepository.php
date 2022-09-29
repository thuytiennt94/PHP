<?php

namespace App\Repositories\product;

use App\Models\Product;
use App\Repositories\BaseRepositories;


class ProductRepository extends BaseRepositories implements ProductRepositoryInterface
{
    public function getModel()
    {
        return Product::class;
    }

    /*public $repository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->repository = $productRepository;
    }*/
}
