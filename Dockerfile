# Use the official PHP-FPM image as the base
FROM php:fpm

# Install required packages and MySQLi extension
RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install mysqli zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*
