FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    git

RUN docker-php-ext-install pdo pdo_mysql mbstring zip

COPY . /var/www
WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=10000