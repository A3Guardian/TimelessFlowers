FROM php:8.2-fpm

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

# Install other dependencies if needed (e.g., for Composer, etc.)
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd

# Copy your application files
COPY . /var/www
