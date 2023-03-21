<?php

var_dump($_FILES);
die();

// provjera varijable FILES
if(empty($_FILES)){
    echo 'Nema podataka za obradu.';

    return;
}

// provjera jel upload prosao OK
if ($_FILES['picture']['error'] !== UPLOAD_ERR_OK){
    echo 'Došlo je do pogreške prilikom upload-a.';

    return;
}

if (!in_array($_FILES['picture']['type'], ['image/png', 'image/jpeg', 'image/gif', 'image/svg+xml',])){
    echo "Datoteka nije slika!";

    return;
}

 // Definiramo upload direktorij
 $uploadDir = __DIR__ . '/uploads';
 // Provjerimo da li direktorij postoji
 if(!file_exists($uploadDir)){
     // Ako ne postoji, kreiramo ga
     if (!mkdir($uploadDir, 0775, true)) {
        echo "Pogreška kod kreiranja direktorija!";

        return;
     }
 }

// Definiramo varijable s podacima o datoteci
$uploadDestinationFile = $uploadDir. '/' . $_FILES['picture']['name'];

// Provjera prijenosa datoteke
if(move_uploaded_file($_FILES['picture']['tmp_name'], $uploadDestinationFile)){
    echo 'Uspješno ste upload-ali datoteku.';
} else {
    echo "Pogreška kod uploada datoteke!";
}