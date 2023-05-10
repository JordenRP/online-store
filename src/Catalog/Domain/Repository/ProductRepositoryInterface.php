<?php

declare(strict_types=1);

namespace Catalog\Domain\Repository;

use Catalog\Domain\Entity\ProductInterface;

interface ProductRepositoryInterface
{
    public function findById(int $id): ?ProductInterface;

    public function getInstance(): ProductInterface;
}
