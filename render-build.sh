#!/usr/bin/env bash
# Install PHP 8.2
apt-get update && apt-get install -y php8.2 php8.2-cli php8.2-mbstring php8.2-xml php8.2-bcmath php8.2-pgsql php8.2-mysql

# Build commands
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan config:cache
php artisan route:cache
php artisan view:cache