<?php

namespace App\Controller;

class GenreController
{
    public function index()
    {
        return [
            ['name' => 'Horor'],
            ['name' => 'Komedija'],
            ['name' => 'Drama'],
        ];
    }
}