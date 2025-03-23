FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    curl \
    git \
    unzip \
    vim \
    gnupg \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo_mysql \
    && a2enmod rewrite \
    && service apache2 restart

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm

WORKDIR /var/www/html

COPY . /var/www/html

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
