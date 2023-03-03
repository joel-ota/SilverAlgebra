<?php

// Definiranje niza
$users = [
    [
        'name' => 'Ivan',
        'surname' => 'Horvat',
        'age' => 33,
        'sex' => 'M'
    ],
    [
        'name' => 'Mia',
        'surname' => 'Mikulić',
        'age' => 21,
        'sex' => 'F'
    ]
];
// Ispis niza
print_r($users);
// Brisanje ključa godine i njegove vrijednosti za svakog korisnika
unset($users[0]['sex']);
unset($users[1]['sex']);
// Ispis niza
print_r($users);
// Dodavanje novog korisnika u niz
$users[] = [
    'name' => 'Marko',
    'surname' => 'Antić',
    'age' => 45
];
// Ispis niza
print_r($users);

