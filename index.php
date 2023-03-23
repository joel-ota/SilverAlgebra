<?php

// Pokretanje sesije
session_start();
// Zapisivanje podatak u sesijsku varijablu
$_SESSION['email'] = 'test@test.com';
// Ispis podatka iz sesije
echo $_SESSION['email'];
// Zatvaranje sesije
session_destroy();
// Ispis sesijeske varijable
print_r($_SESSION);