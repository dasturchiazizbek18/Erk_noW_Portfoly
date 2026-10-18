FROM php:8.2-apache

# Tizim paketlarini o'rnatish
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip libsqlite3-dev

# PHP kengaytmalarini o'rnatish
RUN docker-php-ext-install pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd

# Composer'ni yuklab olish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Ishchi papkani belgilash
WORKDIR /var/www/html
COPY . /var/www/html

# Composer paketlarini o'rnatish
RUN composer install --no-dev --optimize-autoloader

# Apache public papkaga yo'naltirish
RUN sed -i -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Storage va database papka ruxsatlarini to'g'rilash
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

EXPOSE 80

# Server yonishidan oldin avtomatik migratsiya qilish va Apache'ni ishga tushirish
CMD php artisan migrate:fresh --seed --force && apache2-foreground