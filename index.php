<?php

use App\Videostore\Genre;

include 'vendor/autoload.php';
$databaseConfig = require './config/database.php';

try {
    $connection = new PDO(
        "mysql:host={$databaseConfig['host']};dbname={$databaseConfig['database']}", 
        $databaseConfig['username'], 
        $databaseConfig['password'],
        [
            PDO::ATTR_PERSISTENT => true,
        ]
    );
} catch (\Throwable $th) {
    echo "Error while connecting to the database\n";

    return;
}

var_dump($connection->getAvailableDrivers());

// // transakcije
// try {
//     $connection->begin_transaction();
//     $connection->query("INSERT INTO zanr (Naziv) VALUES('Triler')");
//     $connection->commit();
// } catch (\Throwable $th) {
//     $connection->rollback();
// }

// // procedure
// $result = $connection->query('CALL dohvatiClanove()');

// foreach ($result as $member) {
//     var_dump($member);
// }

// // prepared statement
// $id = 100;
// $naziv = 'Triler';

// $statement = $connection->prepare("INSERT INTO zanr (ID_Zanr, Naziv) VALUES(?, ?)");
// $statement->bind_param('is', $id, $naziv);

// if (!$statement->execute()){
//     echo "Error while executing statement\n";
// }