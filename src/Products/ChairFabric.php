<?php

namespace StudyStreamPlus\Products;


class ChairFabric implements Product
{
    public function validate(): void
    {
        echo "Validate Fabric Chair\n";
    }

    public function save(): void
    {
        echo "Save Fabric Chair\n";
    }
}