<?php

namespace App\Math\Geometry;

use App\Math\Geometry\Interface\Drawable;
use Iterator;

class Notebook implements Iterator
{
    private static ?Notebook $instance = null;

    private array $shapes = [];

    private int $position = 0;

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

    public function current(): mixed
    {
        return $this->shapes[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->shapes[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}