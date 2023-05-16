<?php

use App\Math\Geometry\Notebook;
use App\Math\Geometry\Observer\LoggingShapeObserver;
use App\Math\Geometry\Observer\ShapeObserver;
use App\Math\Geometry\ShapeFactory;

include 'vendor/autoload.php';

$shapeFactory = new ShapeFactory();
$shapeObserver = new ShapeObserver();
$loggingObserver = new LoggingShapeObserver();

$notebook = Notebook::getInstance();
$notebook->attach($shapeObserver);
$notebook->attach($loggingObserver);

$notebook
    ->addDrawableShape($shapeFactory->createCircle(10))
    ->addDrawableShape($shapeFactory->createTriangle(5, 10, 2))->addDrawableShape($shapeFactory->createCircle(20));

$notebook->detach($loggingObserver);

$notebook->addDrawableShape($shapeFactory->createCircle(5));