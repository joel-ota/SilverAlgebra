<?php

include 'vendor/autoload.php';
$databaseConfig = require './config/database.php';

try {
    $connection = new mysqli(
        username: $databaseConfig['username'], 
        password: $databaseConfig['password'], 
        database: $databaseConfig['database']
    );
} catch (\Throwable $th) {
    echo "Error while connecting to the database\n";

    return;
}