<?php

// Definiranje varijabli
$a = 5;
$b = 10;
$c = 15;

// Provjera da li je vrijednost varijable b između a i c
if(($b > $a && $b < $c) || ($b < $a && $b > $c)){
    echo 'Vrijednost b je između a i c';
} else {
    echo 'Vrijednost b nije između a i c';
}

// Provjera i ispis rezultata
switch(date('N')){
    case 1:
        echo 'Danas je ponedjeljak.';
        break;
    case 2:
        echo 'Danas je utorak.';
        break;
    case 3:
        echo 'Danas je srijeda.';
        break;
    case 4:
        echo 'Danas je četvrtak.';
        break;
    case 5:
        echo 'Danas je petak.';
        break;
    case 6:
        echo 'Danas je subota.';
        break;
    case 7:
        echo 'Danas je nedjelja.';
        break;
    default:
        echo 'Nepostojeći dan.';
        break;
}