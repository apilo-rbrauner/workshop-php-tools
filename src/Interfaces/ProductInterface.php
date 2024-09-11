<?php

/*
 * All Rights Reserved
 * @copyright Copyright (C) 2024 Apilo
 */

declare(strict_types=1);

namespace App\Interfaces;

interface ProductInterface
{
    public function getId(): int;

    public function getName(): string;

    public function setName(string $name): ProductInterface;

    public function getDescription(): string;

    public function setDescription(string $description): ProductInterface;

    public function getPrice(): int;

    public function setPrice(int $price): ProductInterface;

    public function __toString(): string;
}
