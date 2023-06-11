<?php

namespace App\Math\Geometry;

class ShapeFactory
{
    public function createCircle(int $radius): Circle
    {
        return new Circle($radius);
    }

    public function createSquare(int $side): Square
    {
        return new Square($side);
    }

    public function createTriangle(
        int $firstSide, int $secondSide, int $thirdSide): Triangle
    {
        return new Triangle($firstSide, $secondSide, $thirdSide);
    }
}