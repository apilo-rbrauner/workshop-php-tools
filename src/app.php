<?php

/*
 * All Rights Reserved
 * @copyright Copyright (C) 2024 Apilo
 */

declare(strict_types=1);

namespace App;

use App\Interfaces\ProductInterface;
use App\Model\Category;
use App\Model\CommonProduct;

use function iterator_to_array;

require_once __DIR__ . '/../vendor/autoload.php';

$id = 1;

/**
 * @return iterable<ProductInterface>
 */
function productsGenerator(int $count): iterable
{
    global $id;

    for ($i = 1; $i <= $count; $i++) {
        yield (new CommonProduct($id++))->setName("Name $i")->setDescription("Description $i")->setPrice($i * 10);
    }
}

$categories = [];

// Category 1
$products = iterator_to_array(productsGenerator(3));
$category = (new Category(1))->setProducts($products)->setName('Name 1')->setDescription('Description 1');
$categories[] = $category;

// Category 2
$products = iterator_to_array(productsGenerator(10));
$categories[] = (new Category(2))->setProducts($products)->setName('Name 2')->setDescription('Description 2');

// Category 3
$categories[] = (new Category(3))->setProducts(iterator_to_array(productsGenerator(50)))->setName('Name 3')->setDescription('Description 3');

foreach ($categories as $category) {
    dump((string) $category);
}
