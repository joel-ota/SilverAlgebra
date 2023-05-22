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

// obican query

$result = $connection->query('SELECT * FROM zanr');
$result->setFetchMode(PDO::FETCH_CLASS, Genre::class);

foreach ($result as $genre) {
    var_dump($genre);
}

// // prepared statement
$id = 100;
$naziv = 'Triler';

$statement = $connection->prepare(
    "INSERT INTO zanr (ID_Zanr, Naziv) VALUES(:id, :naziv)"
);
$statement->bindValue(':id', 200);
$statement->bindParam(':naziv', $naziv);

if (!$statement->execute()){
    echo "Error while executing statement\n";
}

$fetchGenre = $connection->prepare("SELECT * FROM zanr WHERE Naziv = ?");
$fetchGenre->setFetchMode(PDO::FETCH_CLASS, Genre::class);

try {
    if (!$fetchGenre->execute([$_GET['naziv']])){
        echo "Error while executing statement\n";
    }
    
    var_dump($fetchGenre->fetchAll());
} catch (\Throwable $th) {
    var_dump($th);
}


// // transakcije
try {
    $connection->beginTransaction();
    $connection->query("INSERT INTO zanr (Naziv) VALUES('Triler')");
    $connection->commit();
} catch (\Throwable $th) {
    $connection->rollback();
}

// procedure
$result = $connection->query('CALL dohvatiClanove()');

foreach ($result as $member) {
    var_dump($member);
}