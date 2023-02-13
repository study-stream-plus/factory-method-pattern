<?php

namespace StudyStreamPlus\Products;

class DeskPlastic implements Product
{
    public function validate(): void
    {
        echo "Validate Plastic Desk\n";
    }

    public function save(): void
    {
        echo "Save Plastic Desk\n";
    }
}