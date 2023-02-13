<?php

namespace StudyStreamPlus\ProductFactories;

use StudyStreamPlus\Products\ChairFabric;
use StudyStreamPlus\Products\ChairLeather;
use StudyStreamPlus\Products\Product;

class ChairFactory implements Factory
{
    public function create(string $type): Product
    {
        switch ($type) {
            case 'fabric':
                return new ChairFabric();
            case 'leather':
                return new ChairLeather();
            default:
                throw new \Exception('The requested product does not exist');
        }
    }
}