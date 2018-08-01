<?php

namespace AppConfig;

use App\UseCase\Ok\OkMessage;
use App\UseCase\Ok\TestMessage;
use Lencse\Rectum\DependencyInjection\Configuration\DependencyInjectionConfig;

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
