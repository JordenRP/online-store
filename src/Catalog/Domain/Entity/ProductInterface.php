<?php

declare(strict_types=1);

namespace Catalog\Domain\Entity;

interface ProductInterface
{
    public function getId(): int;

    public function setId(int $id): self;

    public function getName(): string;

    public function setName(string $name): self;

    public function getPrice(): float;

    public function setPrice(float $price): self;
}
