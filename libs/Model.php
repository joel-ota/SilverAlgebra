<?php
namespace Core;

use PDO;

abstract class Model
{
    public function __construct(
        private PDO $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD)
    ) {}

    public function findAll(): array
    {
        $query = $this->connection->query(
            sprintf('SELECT * FROM %s', $this->getTable())
        );
        $query->setFetchMode(PDO::FETCH_CLASS, $this->getClassName());

        $results = $query->fetchAll();

       
        $formattedResults = [];
        foreach ($results as $result) {
            $formattedResults[] = $result;
            $formattedResults[] = json_encode($entries .  '    '    . JSON_PRETTY_PRINT);
        }

        return $formattedResults;
    }

    abstract function getClassName(): string;

    abstract function getTable(): string;
}
