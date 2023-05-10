<?php

declare(strict_types=1);

namespace Catalog\Infrastructure;

use Catalog\Domain\Entity\ProductInterface;
use Catalog\Domain\Repository\ProductRepositoryInterface;
use Catalog\Infrastructure\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductRepository extends ServiceEntityRepository implements ProductRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function findById(int $id): ?ProductInterface
    {
        return $this->findOneBy(['id' => $id]);
    }

    public function getInstance(): ProductInterface
    {
        return new Product();
    }
}
