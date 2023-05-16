<?php

namespace App\Math\Geometry;

use App\Math\Geometry\Interface\Drawable;
use Iterator;
use SplObjectStorage;
use SplObserver;
use SplSubject;

class Notebook implements Iterator, SplSubject
{
    private static ?Notebook $instance = null;

    private array $shapes = [];

    private int $position = 0;

    private function __construct(private SplObjectStorage $observers = new SplObjectStorage())
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
        $this->notify();

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

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);   
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);   
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}