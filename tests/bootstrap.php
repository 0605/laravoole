<?php
namespace Laravoole;

use Illuminate\Broadcasting\Broadcasters\Broadcaster;
use stdClass;

require __DIR__ . '/../vendor/autoload.php';

if (!class_exists(Broadcaster::class)) {
    class_alias(stdClass::class, Broadcaster::class);
}

function env($key, $default = null)
{
    if ($default instanceof \Closure) {
        return $default();
    }
    return $default;
}

function storage_path()
{
    return '';
}
