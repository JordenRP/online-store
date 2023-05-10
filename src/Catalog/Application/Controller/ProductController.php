<?php

declare(strict_types=1);

namespace Catalog\Application\Controller;

use Catalog\Domain\Repository\ProductRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    public function __construct(
        private readonly ProductRepositoryInterface $productRepository
    ) {
    }

    #[Route(path: '/catalog/product/{id}', methods: ['GET'])]
    public function __invoke(int $id): JsonResponse
    {
        $product = $this->productRepository->findById($id);

        return $this->json($product);
    }
}
