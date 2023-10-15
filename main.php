<?php

require 'vendor/autoload.php';

use Confectionery\Classes\ConfectioneryFactory;
use Confectionery\Classes\Equipment;
use Confectionery\Classes\Product;


$equipmentChocolate = new Equipment('Шоколадная машина', 100);
$equipmentIceCream = new Equipment('Машина для приготовления мороженого', 200);
$equipmentPastry = new Equipment('Кондитерская машина', 50);

$productChocolate = new Product('Шоколад', 30, 5, 1);
$productIceCream = new Product('Мороженое', 10, 3, 1);
$productPastry = new Product('Выпечка', 20, 2, 2);

$factory = new ConfectioneryFactory();

$factory->addEquipment($equipmentChocolate);
$factory->addEquipment($equipmentIceCream);
$factory->addEquipment($equipmentPastry);

$factory->addProduct($productChocolate);
$factory->addProduct($productIceCream);
$factory->addProduct($productPastry);

$factory->produce(12);

$productionCounts = $factory->getProductionCounts();
$totalCost = $factory->getTotalProductionCost();

echo "Общее количество произведенных изделий:\n";
foreach ($productionCounts as $productName => $count) {
    echo "$productName: $count\n";
}

echo "Общая стоимость производства: $totalCost\n";

$equipmentIceCream2 = new Equipment('Машина для приготовления мороженого 2', 300);
$equipmentPastry2 = new Equipment('Кондитерская машина 2', 70);

$factory->addEquipment($equipmentIceCream2);
$factory->addEquipment($equipmentPastry2);

$factory->produce(12);

$productionCounts = $factory->getProductionCounts();
$totalCost = $factory->getTotalProductionCost();

echo "Общий объем производства (после добавления нового оборудования):\n";
foreach ($productionCounts as $productName => $count) {
    echo "$productName: $count\n";
}

echo "Общая стоимость производства (после добавления нового оборудования): $totalCost\n";