FROM php:8.0.12-apache
WORKDIR /var/www/html
COPY ./index.php ./
