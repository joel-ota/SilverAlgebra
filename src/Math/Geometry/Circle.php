<?php

namespace App\Math\Geometry;

use App\Math\Constants as Konstante;

class Circle
{
    public function __construct(private int $radius)
    {}

    public function getExtent(): int
    {
        return 2 * $this->radius * Konstante::PI;
    }
}