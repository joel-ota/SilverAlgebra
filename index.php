<?php

include 'vendor/autoload.php';

use App\College\Student;
use App\College\Teacher;

$teacher = new Teacher('Ivan', 29, 'm');

$student = new Student('Ana', 29, teacher: $teacher);
$student2 = new Student('Marko', gender: 'm', teacher: $teacher);
$student3 = new Student('Luka');

$circle = new \App\College\Circle([
    $teacher,
    $student,
    $student2
]);

var_dump(
    strlen($circle->getPeople())
);

$geometryCircle = new \App\Math\Geometry\Circle(10);
var_dump($geometryCircle->getExtent());
