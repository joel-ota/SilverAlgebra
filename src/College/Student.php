<?php

namespace App\College;

use App\College\Interface\GreetingPerson;
use App\College\Interface\FriendlyGreetingPerson;

class Student extends Person implements GreetingPerson, FriendlyGreetingPerson
{
    public function __construct(
        string $name,
        int $age = 20,
        string $gender = 'f',
        private Teacher $teacher = new Teacher('Ivan')
    ) {
        parent::__construct($name, $age, $gender);
    }

    public function sayHello(): string
    {
        $hello = "Hi, my name is $this->name. I am $this->age years old!";

        if ($this->gender === 'm') {
            $hello .= ' I am a male.';
        } else {
            $hello .= ' I am a female.';
        }

        $hello .= " My teacher is {$this->teacher->name}";

        return $hello;
    }

    public function attend(): string
    {
        return "Listening to the lecture";
    }

    public function smile(): string
    {
        return 'Smiling!';
    }

    public function __toString()
    {
        return "Student $this->name";
    }
}