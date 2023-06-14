<?php

namespace App\Service;

class AppService
{
    public function __construct(
        private DatabaseService $databaseService, private array $config
        )
    {}

    public function sendResponse()
    {
        dd($config);
        return $this->databaseService->getGenres();
    }
}