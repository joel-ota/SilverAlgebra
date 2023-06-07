<?php

namespace App\Controller;

use App\Model\Genre;

class GenreController
{
    public function index()
    {
        $genre = new Genre();

        return $genre->findAll();
    }
}