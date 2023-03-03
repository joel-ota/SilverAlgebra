<?php

// Definiranje niza
$primeNumbers = [2,3,5,7,11];
// Provjera trećeg elementa u nizu i ispis
var_dump(isset($primeNumbers[2]));
// Ispis trećeg elementa zato što postoji u nizu
if (isset($primeNumbers[2])){
    echo "\n", "Postoji ", $primeNumbers[2], "\n";
} else{
    echo "\n", "Ne postoji treci element.", "\n";
} 
// Dodavanje novog elemementa na kraj niza
$primeNumbers[] = 13;
// Ispis broja elemenata u nizu
echo count($primeNumbers);
// Ispis cijelog niza
print_r($primeNumbers);
// Sortiranje niza silazno po vrijednostima
rsort($primeNumbers);
// Ispis cijelog niza
print_r($primeNumbers);