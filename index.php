<?php

use App\Math\Geometry\Notebook;
use App\Math\Geometry\ShapeFactory;

include 'vendor/autoload.php';

$shapeFactory = new ShapeFactory();

$notebook = Notebook::getInstance();
$notebook
    ->addDrawableShape($shapeFactory->createCircle(10))
    ->addDrawableShape($shapeFactory->createTriangle(5, 10, 2));

echo $notebook->getDrawing(), "\n";

$notebook = Notebook::getInstance();
$notebook->addDrawableShape($shapeFactory->createSquare(15));

echo $notebook->getDrawing(), "\n";