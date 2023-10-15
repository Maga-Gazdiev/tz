<?php

class Equipment //Оборудование
{
    protected $id;
    protected $productionRate;

    public function __construct($id, $productionRate)
    {
        $this->id = $id; 
        $this->productionRate = $productionRate; 
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProductionRate()
    {
        return $this->productionRate;
    }
}