@echo off
cd /d "%~dp0"

if not exist database\database.sqlite (
    type nul > database\database.sqlite
)

if exist public\hot (
    del public\hot
)

php artisan config:cache
php artisan migrate --force
php artisan serve --host=127.0.0.1 --port=8000
