<?php

namespace Confectionery\Classes;

use Confectionery\Interfaces\EquipmentInterface;

class Equipment implements EquipmentInterface
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