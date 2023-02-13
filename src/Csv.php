<?php

namespace StudyStreamPlus;

use StudyStreamPlus\ProductFactories\ChairFactory;

class Csv
{
    protected ChairFactory $chairFactory;
    protected array $products;

    public function __construct(ChairFactory $chairFactory)
    {
        $this->chairFactory = $chairFactory;

        // Imagine we have read this product data from the CSV.
        $this->products = [
            ['type' => 'chair', 'quantity' => 4, 'material' => 'fabric'],
            ['type' => 'chair', 'quantity' => 2, 'material' => 'leather'],
        ];
    }

    public function import(): void
    {
        // Save each product to a data store.
        foreach ($this->products as $product) {
            $product = $this->chairFactory->create($product['material']);
            $product->validate();
            $product->save();
        }
    }
}