<?php

namespace StudyStreamPlus\ProductFactories;

use StudyStreamPlus\Products\DeskOak;
use StudyStreamPlus\Products\DeskPlastic;
use StudyStreamPlus\Products\Product;

class DeskFactory implements Factory
{
    public function create(string $type): Product
    {
        switch ($type){
            case $type == 'oak':
                return new DeskOak();
            case $type == 'plastic':
                return new DeskPlastic();
            default:
                throw new \Exception('The requested product does not exist');
        }
    }
}