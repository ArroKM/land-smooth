FROM php:8.2-fpm

COPY public /var/www/lp/public
WORKDIR /var/www/lp/
