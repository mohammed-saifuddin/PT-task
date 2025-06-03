# docker/Dockerfile
FROM php:7.4-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git && \
    docker-php-ext-install pdo pdo_mysql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy application source code
COPY . .

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Set working directory
WORKDIR /var/www/html/
