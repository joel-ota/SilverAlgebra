<?php

spl_autoload_register(function($className){
    $classFile = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $classFile = 'src/' . $classFile;
    $classFile .= '.php';

    if (file_exists($classFile)) {
        require $classFile;

        return true;
    }

    return false;
});

interface GreetingPerson
{
    public function sayHello(): string;
}

interface FriendlyGreetingPerson extends GreetingPerson
{
    const FOO = 'bar';

    public function smile(): string;
}

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

class Teacher extends Person implements GreetingPerson
{
    public function sayHello(): string
    {
        return "Hello, I am a teacher. My name is $this->name";
    }

    public function attend(): string
    {
        return "Teaching a group!";
    }

    public function __toString()
    {
        return "Nastavnik $this->name";
    }
}

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

class Robot implements GreetingPerson, FriendlyGreetingPerson
{
    public function sayHello(): string
    {
        return 'Beep boop!';
    }

    public function smile(): string
    {
        return 'Cling clang!';
    }
}

$teacher = new Teacher('Ivan', 29, 'm');

$student = new Student('Ana', 29, teacher: $teacher);
$student2 = new Student('Marko', gender: 'm', teacher: $teacher);
$student3 = new Student('Luka');

$circle = new \College\Circle([
    $teacher,
    $student,
    $student2
]);

var_dump(
    strlen($circle->getPeople())
);

$geometryCircle = new \Math\Geometry\Circle(10);
var_dump($geometryCircle->getExtent());
