<?php


use Confectionery\Classes\ConfectioneryFactory;
use Confectionery\Classes\Equipment;
use Confectionery\Classes\Product;
use PHPUnit\Framework\TestCase;

class ConfectioneryFactoryTest extends TestCase
{
    public function testProduce()
    {
        $factory = new ConfectioneryFactory();

        $equipmentChocolate = new Equipment('Chocolate Machine', 100);
        $equipmentIceCream = new Equipment('Ice Cream Machine', 200);
        $equipmentPastry = new Equipment('Pastry Machine', 50);

        $productChocolate = new Product('Chocolate', 30, 5, 1);
        $productIceCream = new Product('Ice Cream', 10, 3, 1);
        $productPastry = new Product('Pastry', 20, 2, 2);

        $factory->addEquipment($equipmentChocolate);
        $factory->addEquipment($equipmentIceCream);
        $factory->addEquipment($equipmentPastry);

        $factory->addProduct($productChocolate);
        $factory->addProduct($productIceCream);
        $factory->addProduct($productPastry);

        $factory->produce(12);

        $productionCounts = $factory->getProductionCounts();

        $this->assertEquals(3600, $productionCounts['Chocolate']);
        $this->assertEquals(7200, $productionCounts['Ice Cream']);
        $this->assertEquals(1800, $productionCounts['Pastry']);
    }

    public function testTotalProductionCost()
    {
        $factory = new ConfectioneryFactory();

        $equipmentChocolate = new Equipment('Chocolate Machine', 100);
        $equipmentIceCream = new Equipment('Ice Cream Machine', 200);
        $equipmentPastry = new Equipment('Pastry Machine', 50);

        $productChocolate = new Product('Chocolate', 30, 5, 1);
        $productIceCream = new Product('Ice Cream', 10, 3, 1);
        $productPastry = new Product('Pastry', 20, 2, 2);

        $factory->addEquipment($equipmentChocolate);
        $factory->addEquipment($equipmentIceCream);
        $factory->addEquipment($equipmentPastry);

        $factory->addProduct($productChocolate);
        $factory->addProduct($productIceCream);
        $factory->addProduct($productPastry);

        $factory->produce(12);

        $totalCost = $factory->getTotalProductionCost();

        $this->assertEquals(43200, array_sum($totalCost));
    }
}
