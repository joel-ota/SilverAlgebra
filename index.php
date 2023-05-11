<?php

use App\Math\Geometry\Circle;
use App\Math\Geometry\Notebook;
use App\Math\Geometry\Triangle;
use App\Math\Geometry\Square;

include 'vendor/autoload.php';

$notebook = Notebook::getInstance();
$notebook
    ->addDrawableShape(new Circle(10))
    ->addDrawableShape(new Triangle());

echo $notebook->getDrawing(), "\n";

$notebook = Notebook::getInstance();
$notebook->addDrawableShape(new Square());

echo $notebook->getDrawing(), "\n";