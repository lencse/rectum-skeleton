<?php

namespace AppConfig;

use Lencse\Rectum\Component\Web\Http\HttpMethod;
use Lencse\Rectum\Framework\Web\Routing\Configuration\RoutingConfig;
use App\Handler\HelloHandler;
use App\Handler\OkHandler;

return new class() implements RoutingConfig {
    public function routes(): array
    {
        return [
            [HttpMethod::get(), '/', OkHandler::class],
            [HttpMethod::get(), '/hello/{name}', HelloHandler::class, ['name' => '[a-zA-Z]+']],
        ];
    }
};