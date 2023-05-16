<?php

use App\Math\Geometry\Notebook;
use App\Math\Geometry\ShapeFactory;

include 'vendor/autoload.php';

$shapeFactory = new ShapeFactory();

$notebook = Notebook::getInstance();
$notebook
    ->addDrawableShape($shapeFactory->createCircle(10))
    ->addDrawableShape($shapeFactory->createTriangle(5, 10, 2));

for ($notebook->rewind(); $notebook->valid() ; $notebook->next()) { 
    echo $notebook->current()->draw(), "\n";
}

foreach ($notebook as $shape) {
    echo $shape->draw(), "\n";
}