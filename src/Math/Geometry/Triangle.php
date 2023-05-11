<?php

namespace App\Math\Geometry;

use App\Math\Geometry\Interface\Drawable;

class Triangle implements Drawable
{
    public function draw(): string
    {
        return '▲';
    }
}