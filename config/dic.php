<?php

namespace AppConfig;

use Lencse\Rectum\Component\DependencyInjection\Configuration\DependencyInjectionConfig;
use App\UseCase\Ok\OkMessage;
use App\UseCase\Ok\TestMessage;

return new class() implements DependencyInjectionConfig {
    public function bind(): array
    {
        return [
            TestMessage::class => OkMessage::class
        ];
    }

    public function factory(): array
    {
        return [];
    }

    public function setup(): array
    {
        return [];
    }

    public function wire(): array
    {
        return [];
    }

    public function instance(): array
    {
        return [];
    }
};
