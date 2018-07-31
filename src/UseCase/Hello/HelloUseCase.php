<?php

namespace App\UseCase\Hello;

class HelloUseCase
{

    public function getMessage(string $name): string
    {
        return "Hello, $name!";
    }
}
