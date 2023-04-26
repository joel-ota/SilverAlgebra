<?php

class Osoba{
    public function __construct(
        protected string $name, 
        protected int $age = 20, 
        protected string $gender = 'f'
        )
    {
        echo "Calling construct in Osoba\n";
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
}

class Predavac extends Osoba
{
}

class Polaznik extends Osoba
{
    public function __construct(
        string $name, 
        int $age = 20, 
        string $gender = 'f',
        private Predavac $predavac = new Predavac('Ivan')
        )
    {
        parent::__construct($name, $age, $gender);
        echo "Calling construct in Osoba\n";
    }

    public function __destruct()
    {
        echo "Mr. Stark, I don't feel so good....\n";
    }

    public function sayHello(): string
    {
        $hello = "Hi, my name is $this->name. I am $this->age years old!";

        if ($this->gender === 'm') {
            $hello .= ' I am a male.';
        } else {
            $hello .= ' I am a female.';
        }

        $hello .= " My teacher is {$this->predavac->name}";

        return $hello;
    }
}

$polaznik = new Polaznik('Ana', 29);
$polaznik2 = new Polaznik('Marko', gender: 'm');

unset($polaznik);

var_dump($polaznik2->sayHello());