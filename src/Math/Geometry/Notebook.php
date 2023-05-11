<?php

namespace App\Math\Geometry;

use App\Math\Geometry\Interface\Drawable;

class Notebook
{
    private static ?Notebook $instance = null;

    private array $shapes = [];

    private function __construct()
    {}

    public static function getInstance(): self
    {
        if (self::$instance === null){
            self::$instance = new Notebook();
        }

        return self::$instance;
    }

    public function addDrawableShape(Drawable $shape): self
    {
        $this->shapes[] = $shape;

        return $this;
    }

    public function getDrawing(): string
    {
        $drawing = '';

        foreach ($this->shapes as $shape) {
            $drawing .= ' ' . $shape->draw();
        }

        return $drawing;
    }
}