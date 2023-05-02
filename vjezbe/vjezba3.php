<?php

interface Vehicle
{
    public function start(): void;

    public function stop(): void;
}

abstract class Car
{
    public function __construct(protected int $tankCapacity) {
    }

    abstract function getKmOnFullTank(): int;
}

class Audi extends Car implements Vehicle
{
    public function getKmOnFullTank(): int
    {
        return $this->tankCapacity * 20;
    }

    public function start(): void
    {
        echo "Audi has started\n";
    }

    public function stop(): void
    {
        echo "Audi has stopped\n";
    }
}

class Fiat extends Car implements Vehicle
{
    public function getKmOnFullTank(): int
    {
        return $this->tankCapacity * 18;
    }

    public function start(): void
    {
        echo "Fiat has started\n";
    }

    public function stop(): void
    {
        echo "Fiat has stopped\n";
    }
}

class ElectricScooter implements Vehicle
{
    public function start(): void
    {
        echo "Scooter has started\n";
    }

    public function stop(): void
    {
        echo "Scooter has stopped\n";
    }
}