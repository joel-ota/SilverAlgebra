<?php

class Osoba{
    protected readonly string $name;

    protected int $age;

    protected string $gender;

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
}

class Predavac extends Osoba
{
}

class Polaznik extends Osoba
{
    public function sayHello(): string
    {
        return "Hi, my name is $this->name";
    }

    private Predavac $predavac;
}

class Circle
{
    const PI = 3.14;

    public float $radius;

    public function getOpseg()
    {
        return 2 * $this->radius * self::PI;
    }
}

$circle = new Circle();

var_dump(Circle::PI);

$polaznik = new Polaznik();
$polaznik->setName('Ana');
$polaznik->setAge(29);
$polaznik->setGender(false);

var_dump($polaznik->sayHello());