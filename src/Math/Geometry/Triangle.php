<?php

namespace App\Math\Geometry;

use App\Math\Geometry\Interface\Drawable;

class Triangle implements Drawable
{
    public function __construct(
        private int $firstSide, private int $secondSide, private int $thirdSide
        )
    {}

    public function draw(): string
    {
        return '▲';
    }
}