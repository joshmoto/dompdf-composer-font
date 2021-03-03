FROM php:7.3-fpm-alpine

WORKDIR /var/www

RUN apk upgrade --update && apk add freetype-dev libjpeg-turbo-dev libpng-dev

RUN docker-php-ext-configure gd \
--with-freetype-dir=/usr/include/ \
--with-jpeg-dir=/usr/include/

RUN docker-php-ext-install pdo pdo_mysql bcmath opcache gd
