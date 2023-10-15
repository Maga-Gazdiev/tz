<?php

require 'Equipment.php';
require 'Product.php';
require 'ConfectioneryFactory.php';

// Создаем экземпляры оборудования
$equipmentChocolate = new Equipment('Шоколадная машина', 100);
$equipmentIceCream = new Equipment('Машина для приготовления мороженого', 200);
$equipmentPastry = new Equipment('Кондитерская машина', 50);

// Создаем экземпляры продукции
$productChocolate = new Product('Шоколад', 30, 5, 1);
$productIceCream = new Product('Мороженое', 10, 3, 1);
$productPastry = new Product('Выпечка', 20, 2, 2);

// Создаем кондитерскую фабрику
$factory = new ConfectioneryFactory();

// Добавляем оборудование на фабрику
$factory->addEquipment($equipmentChocolate);
$factory->addEquipment($equipmentIceCream);
$factory->addEquipment($equipmentPastry);

// Добавляем продукцию на фабрику
$factory->addProduct($productChocolate);
$factory->addProduct($productIceCream);
$factory->addProduct($productPastry);

// Проводим производство продукции в течение 12 часов
$factory->produce(12);

// Выводим результаты
$productionCounts = $factory->getProductionCounts();
$totalCost = $factory->getTotalProductionCost();

echo "Общее количество произведенных изделий:\n";
foreach ($productionCounts as $productName => $count) {
    echo "$productName: $count\n";
}

echo "Общая стоимость производства: $totalCost\n";

// Добавляем еще оборудование
$equipmentIceCream2 = new Equipment('Машина для приготовления мороженого 2', 300);
$equipmentPastry2 = new Equipment('Кондитерская машина 2', 70);

$factory->addEquipment($equipmentIceCream2);
$factory->addEquipment($equipmentPastry2);

// Проводим производство еще 12 часов с новым оборудованием
$factory->produce(12);

// Выводим результаты
$productionCounts = $factory->getProductionCounts();
$totalCost = $factory->getTotalProductionCost();

echo "Общий объем производства (после добавления нового оборудования):\n";
foreach ($productionCounts as $productName => $count) {
    echo "$productName: $count\n";
}

echo "Общая стоимость производства (после добавления нового оборудования): $totalCost\n";