<?php

class Car
{
    public function __construct(private string $serialNumber, private string $model, private string $manufacturer) {
        echo "Created car with {$this->serialNumber} S/N. It is a {$this->manufacturer} {$this->model}\n";
    }

    public function __destruct()
    {
        echo "Car with {$this->serialNumber} is being taken to recycle\n";
    }
}

new Car('12345', 'i30', 'Hyundai');