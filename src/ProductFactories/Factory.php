<?php

namespace StudyStreamPlus\ProductFactories;

use StudyStreamPlus\Products\Product;

interface Factory
{
    public function create(string $type): Product;
}