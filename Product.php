<?php

class Product 
{
    protected $name;
    protected $shelfLife;
    protected $cost;
    protected $productionTime;

    public function __construct($name, $shelfLife, $cost, $productionTime)
    {
        $this->name = $name;
        $this->shelfLife = $shelfLife;
        $this->cost = $cost;
        $this->productionTime = $productionTime;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getShelfLife()
    {
        return $this->shelfLife;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function getProductionTime()
    {
        return $this->productionTime;
    }
}