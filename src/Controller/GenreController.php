<?php

namespace App\Controller;

use App\Model\Genre;

class GenreController
{
    public function index()
    {
        echo 'hi';
        $genre = new Genre();
        
        return $genre->findAll();
    }
}