<?php

/*
 * All Rights Reserved
 * @copyright Copyright (C) 2024 Apilo
 */

declare(strict_types=1);

namespace App\Model;

use App\Interfaces\ProductInterface;

class SpecialProduct implements ProductInterface
{
    private string $name = '';
    private string $description = '';
    private int $price = 0;

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

    public function setName(string $name): ProductInterface
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): ProductInterface
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): ProductInterface
    {
        $this->price = $price;

        return $this;
    }

    public function __toString(): string
    {
        return "[SPECIAL PRODUCT|id: {$this->getId()}, name: {$this->getName()}, description: {$this->getDescription()}, price: {$this->getPrice()}]";
    }
}
