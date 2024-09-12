<?php

/*
 * All Rights Reserved
 * @copyright Copyright (C) 2024 Apilo
 */

declare(strict_types=1);

namespace App;

use App\Generic\CustomException;
use App\Generic\ListOfExceptions;
use App\Interfaces\ProductInterface;
use App\Model\Category;
use App\Model\CommonProduct;

use Exception;

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

/**
 * @return ProductInterface[]
 */
function productsGenerator2(int $count): array
{
    global $id;
    $result = [];

    for ($i = 1; $i <= $count; $i++) {
        $result[] = (new CommonProduct($id++))->setName("Name $i")->setDescription("Description $i")->setPrice($i * 10);
    }

    return $result;
}

$categories = [];

// Category 1
$products = iterator_to_array(productsGenerator(3));
$category = (new Category(1))->setProducts($products)->setName('Name 1')->setDescription('Description 1');
$categories[] = $category;

// Category 2
$products = productsGenerator2(10);
$categories[] = (new Category(2))->setProducts($products)->setName('Name 2')->setDescription('Description 2');

// Category 3
$categories[] = (new Category(3))->setProducts(iterator_to_array(productsGenerator(50)))->setName('Name 3')->setDescription('Description 3');

foreach ($categories as $category) {
    dump((string) $category);
}

// ---

/**
 * @var ListOfExceptions<CustomException> $exceptionsList
 */
$exceptionsList = new ListOfExceptions();
$exceptionsList->add(new CustomException());
$exceptionsList->add(new Exception());
