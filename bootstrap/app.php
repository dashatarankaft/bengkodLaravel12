<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\RoleMiddleware;

$app = new Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Binding penting lainnya (jika perlu)
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

// Middleware tambahan sebaiknya dideklarasikan di app/Http/Kernel.php
// Bukan di bootstrap/app.php

return $app;
