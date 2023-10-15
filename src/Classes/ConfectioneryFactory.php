<?php

namespace Confectionery\Classes;

use Confectionery\Interfaces\EquipmentInterface;
use Confectionery\Interfaces\ProductInterface;

class ConfectioneryFactory
{
    protected $equipment = [];
    protected $products = [];
    protected $productionCounts = [];

    public function addEquipment(EquipmentInterface $equipment)
    {
        $this->equipment[] = $equipment;
    }

    public function addProduct(ProductInterface $product)
    {
        $this->products[] = $product;
        $this->productionCounts[$product->getName()] = 0;
    }

    public function produce($hours)
    {
        foreach ($this->equipment as $equipment) {
            foreach ($this->products as $product) {
                $this->productionCounts[$product->getName()] += $equipment->getProductionRate() * $hours;
            }
        }
    }

    public function getProductionCounts()
    {
        return $this->productionCounts;
    }

    public function getTotalProductionCost()
    {
        $totalCosts = [];

        foreach ($this->productionCounts as $productName => $count) {
            $product = $this->getProductByName($productName);
            $totalCosts[$productName] = $product->getCost() * $count;
        }

        return $totalCosts;
    }


    protected function getProductByName($name)
    {
        foreach ($this->products as $product) {
            if ($product->getName() === $name) {
                return $product;
            }
        }
        return null;
    }
}
