# Usa una imagen oficial de PHP con Apache y PHP 8.2
FROM php:8.2-apache

# Instala dependencias necesarias para la extensión MongoDB y otros paquetes
RUN apt-get update && apt-get install -y \
    libssl-dev \
    libcurl4-openssl-dev \
    pkg-config \
    libssl-dev \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb \
    && a2enmod rewrite

# Copia todos los archivos de tu proyecto al contenedor
COPY . /var/www/html/

# Instala Composer (si aún no lo tienes en tu proyecto)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Asegúrate de que las dependencias de Composer estén actualizadas
RUN composer install

# Establece permisos adecuados para los archivos (opcional)
RUN chown -R www-data:www-data /var/www/html

# Evita el warning de Apache sobre ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expón el puerto 80
EXPOSE 80
