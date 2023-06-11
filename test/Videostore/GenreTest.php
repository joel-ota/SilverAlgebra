<?php

namespace App\Test\Videstore;

use App\Videostore\Genre;
use PHPUnit\Framework\TestCase;

class GenreTest extends TestCase
{
    public function testGetNameReturnsLowercaseName()
    {
        $genre = new Genre('Triler');

        $this->assertSame('triler', $genre->getName());
    }

    public function testGetNameIfUppercaseIsRequestReturnsUppercaseName()
    {
        $genre = new Genre('Triler');

        $this->assertSame('TRILER', $genre->getName(true));
    }
}