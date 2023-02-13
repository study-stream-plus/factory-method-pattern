<?php

require_once 'vendor/autoload.php';

use StudyStreamPlus\Csv;
use StudyStreamPlus\ProductFactories\ChairFactory;

$chairFactory = new ChairFactory();
$csv = new Csv($chairFactory);
$csv->import();