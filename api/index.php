<?php

if (getenv('VERCEL')) {
    $storagePath = '/tmp/storage';
    $compiledViewPath = $storagePath.'/framework/views';

    $_ENV['LARAVEL_STORAGE_PATH'] = $_SERVER['LARAVEL_STORAGE_PATH'] = $storagePath;
    $_ENV['VIEW_COMPILED_PATH'] = $_SERVER['VIEW_COMPILED_PATH'] = $compiledViewPath;

    foreach ([
        $storagePath.'/app',
        $storagePath.'/app/public',
        $storagePath.'/framework',
        $storagePath.'/framework/cache',
        $storagePath.'/framework/cache/data',
        $storagePath.'/framework/sessions',
        $compiledViewPath,
        $storagePath.'/logs',
    ] as $directory) {
        if (! is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
    }
}

require __DIR__.'/../public/index.php';
