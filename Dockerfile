FROM php:7.4-apache
# For Database connection
RUN docker-php-ext-install pdo pdo_mysql