<?php

namespace App\Math\Geometry\Observer;

use SplObserver;
use SplSubject;

class ShapeObserver implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo "Dodan novi geometrijski lik u biljeznicu!\n";
    }
}