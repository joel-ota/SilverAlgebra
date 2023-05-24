<?php

namespace App\Videostore;

class Genre
{
    public function __construct(private string $Naziv)
    {}

    public function getName(bool $isUppercaseRequest = false): string
    {
        return $isUppercaseRequest ? strtoupper($this->Naziv) 
        : strtolower($this->Naziv);
    }
}