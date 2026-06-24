<?php
spl_autoload_register(function ($class) {
    $baseDir = __DIR__;

    if (str_ends_with($class, 'Controller')) {
        $file = $baseDir . '/app/controller/' . $class . '.php';
    } elseif (str_ends_with($class, 'Model')) {
        $file = $baseDir . '/app/model/' . $class . '.php';
    } elseif (str_ends_with($class, 'Service')) {
        $file = $baseDir . '/app/services/' . $class . '.php';
    } elseif ($class === 'Middleware') {
        $file = $baseDir . '/app/middleware/' . $class . '.php';
    } elseif ($class === 'Router') {
        $file = $baseDir . '/app/router/' . $class . '.php';
    } elseif ($class === 'Database') {
        $file = $baseDir . '/app/' . $class . '.php';
    } elseif (str_starts_with($class, 'I') && str_ends_with($class, 'Repository')) {
        $file = $baseDir . '/app/repositories/' . $class . '.php';
    } elseif (str_ends_with($class, 'Repository')) {
        $file = $baseDir . '/app/repositories/' . $class . '.php';
    } elseif (str_ends_with($class, 'Exception')) {
        $file = $baseDir . '/app/exceptions/' . $class . '.php';
    } else {
        $file = null;
    }

    if ($file && file_exists($file)) {
        require_once $file;
    }
});
