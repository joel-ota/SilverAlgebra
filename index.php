<?php

// Kreiranje kolačića
setcookie('EMAIL','test@test.com', time() + 86400, "/");
// Ispis podatka i kolačića
echo $_COOKIE['email'];
// Brisanje kolačića
setcookie("EMAIL", "", time() - 3600);
// Ispis varijable kolačića
print_r($_COOKIE);