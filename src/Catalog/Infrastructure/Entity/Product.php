<?php

declare(strict_types=1);

namespace Catalog\Infrastructure\Entity;

use Catalog\Domain\Entity\ProductInterface;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Product implements ProductInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;
    #[ORM\Column(type: 'string', length: 255)]
    private string $name;
    #[ORM\Column(type: 'float')]
    private float $price;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): ProductInterface
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): ProductInterface
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): ProductInterface
    {
        $this->price = $price;

        return $this;
    }
}
