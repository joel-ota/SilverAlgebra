<?php

namespace App\Model;

use PDO;

class Genre
{
    public function __construct(
        private PDO $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD)
        )
    {}

    public function findAll(): array
    {
        $query = $this->connection->query('SELECT * FROM zanr');
        $query->setFetchMode(PDO::FETCH_CLASS, self::class);

        return $query->fetchAll();
    }
}