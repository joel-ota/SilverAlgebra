<?php

namespace App\Service;

class DatabaseService
{
    public function __construct(private ConnectionServiceInterface $connectionService)
    {}

    public function getGenres()
    {
        return ['Horor', 'Drama', 'Komedija'];
    }
}