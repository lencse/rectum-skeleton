<?php

namespace App\UseCase\Ok;

class OkMessage implements TestMessage
{
    public function getMessage(): string
    {
        return 'OK';
    }
}
