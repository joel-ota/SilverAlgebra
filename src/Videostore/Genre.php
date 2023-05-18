<?php

namespace App\Videostore;

class Genre
{
    private string $ID_Zanr;

    private string $Naziv;

    public function getName(): string
    {
        return strtolower($this->Naziv);
    }
}