FROM php:8.4-fpm

RUN apt-get update \
    && apt-get install -y \
        libpq-dev \
        default-libmysqlclient-dev \
    && docker-php-ext-install \
        pdo_pgsql \
        pdo_mysql \
        pgsql