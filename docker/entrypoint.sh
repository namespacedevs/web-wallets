#!/usr/bin/env sh
set -e

php artisan key:generate
php artisan config:cache
php artisan view:cache

php-fpm -D
nginx -g 'daemon off;'
