FROM php:8.2-fpm

RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip curl git && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm
    
WORKDIR /var/www

COPY . .

