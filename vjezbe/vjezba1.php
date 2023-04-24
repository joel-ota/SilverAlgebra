<?php

class Person
{
    private string $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}

$polaznikRadionice = new Person();
$polaznikRadionice->setName('Ivan');

echo $polaznikRadionice->getName(), "\n";