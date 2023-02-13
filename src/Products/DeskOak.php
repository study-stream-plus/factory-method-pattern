<?php

namespace StudyStreamPlus\Products;

class DeskOak implements Product
{
    public function validate(): void
    {
        echo "Validate Oak Desk\n";
    }

    public function save(): void
    {
        echo "Save Oak Desk\n";
    }
}