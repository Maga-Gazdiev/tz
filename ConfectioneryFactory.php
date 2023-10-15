<?php


class ConfectioneryFactory
{
    protected $equipment = [];
    protected $products = [];
    protected $productionCounts = [];

    public function addEquipment(Equipment $equipment)
    {
        $this->equipment[] = $equipment;
    }

    public function addProduct(Product $product)
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
        $totalCost = 0;
        foreach ($this->productionCounts as $productName => $count) {
            $product = $this->getProductByName($productName);
            $totalCost += $product->getCost() * $count;
        }
        return $totalCost;
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