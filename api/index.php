<?php

function setVercelDefaultEnv(string $key, string $value): void
{
    if (getenv($key) !== false || isset($_ENV[$key]) || isset($_SERVER[$key])) {
        return;
    }

    putenv($key.'='.$value);
    $_ENV[$key] = $_SERVER[$key] = $value;
}

if (getenv('VERCEL')) {
    $storagePath = '/tmp/storage';
    $compiledViewPath = $storagePath.'/framework/views';
    $databasePath = $storagePath.'/database/database.sqlite';

    setVercelDefaultEnv('APP_ENV', 'production');
    setVercelDefaultEnv('APP_DEBUG', 'false');
    setVercelDefaultEnv('APP_KEY', 'base64:URfhtEuooUnTFNCK2ZpBais0+fK2fGghHqE+2SLrIKc=');
    setVercelDefaultEnv('CACHE_STORE', 'array');
    setVercelDefaultEnv('LOG_CHANNEL', 'stderr');
    setVercelDefaultEnv('QUEUE_CONNECTION', 'sync');
    setVercelDefaultEnv('SESSION_DRIVER', 'cookie');
    setVercelDefaultEnv('DB_CONNECTION', 'sqlite');
    setVercelDefaultEnv('DB_DATABASE', $databasePath);
    setVercelDefaultEnv('DB_FOREIGN_KEYS', 'true');
    setVercelDefaultEnv('LARAVEL_STORAGE_PATH', $storagePath);
    setVercelDefaultEnv('VIEW_COMPILED_PATH', $compiledViewPath);

    foreach ([
        $storagePath.'/app',
        $storagePath.'/app/public',
        $storagePath.'/database',
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

    if (! file_exists($databasePath)) {
        $sourceDatabase = file_exists(__DIR__.'/../database/database.sqlite')
            ? __DIR__.'/../database/database.sqlite'
            : __DIR__.'/../database/vercel.sqlite';

        if (file_exists($sourceDatabase)) {
            copy($sourceDatabase, $databasePath);
        } else {
            touch($databasePath);
        }
    }
}

require __DIR__.'/../public/index.php';
