<?php

$uploadDir = '/var/www/html/App/uploads';
$uploadFile = $uploadDir . '/' . $_FILES['userfile']['name'];

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile)){
    echo "File was successfully uploaded\n";
} else {
    echo "Error while uploading file!\n";
}

var_dump($_FILES);