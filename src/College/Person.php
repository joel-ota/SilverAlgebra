<?php

namespace App\College;

abstract class Person
{
    public function __construct(
        protected string $name,
        protected int $age = 20,
        protected string $gender = 'f'
    ) {
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function setGender(bool $isMale): void
    {
        $this->gender = $isMale ? 'm' : 'f';
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract public function attend(): string;
}