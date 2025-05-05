FROM php:8.2-apache

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    git unzip libssl-dev pkg-config libcurl4-openssl-dev

# Instalar la extensión de MongoDB (versión 1.18.0)
RUN pecl install mongodb-1.18.0 \
    && docker-php-ext-enable mongodb

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Instalar dependencias PHP
WORKDIR /var/www/html
RUN composer install

# Habilitar módulo de reescritura de Apache (opcional)
RUN a2enmod rewrite
