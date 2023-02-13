<?php

namespace StudyStreamPlus\Products;

class ChairLeather implements Product
{
    public function validate(): void
    {
        echo "Validate Leather Chair\n";
    }

    public function save(): void
    {
        echo "Save Leather Chair\n";
    }
}