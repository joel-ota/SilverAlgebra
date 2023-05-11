<?php

namespace App\Math\Geometry;

use App\Math\Geometry\Interface\Drawable;

class Square implements Drawable
{
    public function draw(): string
    {
        return '■';
    }
}