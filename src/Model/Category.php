<?php

/*
 * All Rights Reserved
 * @copyright Copyright (C) 2024 Apilo
 */

declare(strict_types=1);

namespace App\Model;

use App\Interfaces\CategoryInterface;
use App\Interfaces\ProductInterface;

use function implode;

class Category implements CategoryInterface
{
    private string $name = '';
    private string $description = '';
    /**
     * @var ProductInterface[]
     */
    private array $products = [];

    public function __construct(
        private int $id,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): CategoryInterface
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): CategoryInterface
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return ProductInterface[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param ProductInterface[] $products
     */
    public function setProducts(array $products): CategoryInterface
    {
        $this->products = $products;

        return $this;
    }

    public function addProduct(ProductInterface $product): CategoryInterface
    {
        $this->products[] = $product;

        return $this;
    }

    public function clearProducts(): CategoryInterface
    {
        $this->products = [];

        return $this;
    }

    public function __toString(): string
    {
        $products = $this->getProducts();
        $products = '{' . implode(', ', $products) . '}';

        return "[CATEGORY|id: {$this->getId()}, name: {$this->getName()}, description: {$this->getDescription()}, products: {$products}]";
    }
}
