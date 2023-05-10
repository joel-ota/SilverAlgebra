<?php

namespace App\College\Interface;

interface FriendlyGreetingPerson extends GreetingPerson
{
    const FOO = 'bar';

    public function smile(): string;
}