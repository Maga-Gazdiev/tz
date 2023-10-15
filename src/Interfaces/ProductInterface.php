<?php

namespace Confectionery\Interfaces;

interface ProductInterface
{
    public function getName();
    public function getShelfLife();
    public function getCost();
    public function getProductionTime();
}
