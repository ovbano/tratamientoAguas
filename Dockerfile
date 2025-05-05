# Usa una imagen oficial de PHP con Apache
FROM php:7.4-apache

# Copia todos los archivos a la carpeta pública de Apache
COPY . /var/www/html/

# Habilita las extensiones necesarias
RUN docker-php-ext-install mysqli

# Instala extensiones de MongoDB
RUN apt-get update && apt-get install -y libssl-dev \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb
