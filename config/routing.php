<?php

namespace AppConfig;

use App\Handler\HelloHandler;
use App\Handler\OkHandler;
use Lencse\Rectum\Web\Http\Component\HttpMethod;
use Lencse\Rectum\Web\Routing\Configuration\RoutingConfig;

return new class() implements RoutingConfig {
    public function routes(): array
    {
        return [
            [HttpMethod::get(), '/', OkHandler::class],
            [HttpMethod::get(), '/hello/{name}', HelloHandler::class, ['name' => '[a-zA-Z]+']],
        ];
    }
};
