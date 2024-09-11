<?php

/*
 * All Rights Reserved
 * @copyright Copyright (C) 2024 Apilo
 */

declare(strict_types=1);

namespace App\Interfaces;

interface CategoryInterface
{
    public function getId(): int;

    public function getName(): string;

    public function setName(string $name): CategoryInterface;

    public function getDescription(): string;

    public function setDescription(string $description): CategoryInterface;

    /**
     * @return ProductInterface[]
     */
    public function getProducts(): array;

    /**
     * @param ProductInterface[] $products
     */
    public function setProducts(array $products): CategoryInterface;

    public function addProduct(ProductInterface $product): CategoryInterface;

    public function clearProducts(): CategoryInterface;

    public function __toString(): string;
}
