ARG PHP_VERSION=7.4-fpm-alpine
ARG COMPOSER_VERSION=latest

FROM composer:${COMPOSER_VERSION} AS base_composer
FROM php:${PHP_VERSION} AS symfony_prod

RUN docker-php-ext-install \
    pdo \
    pdo_mysql

WORKDIR /app

COPY --from=base_composer /usr/bin/composer /usr/bin/composer

#ADD composer.json composer.lock symfony.lock .env ./
#RUN composer install --no-ansi --no-interaction --classmap-authoritative --no-scripts
#
#ADD bin bin/
#ADD config config/
#ADD public public/
#ADD src src/
#ADD fixtures fixtures/

ENV SHELL_VERBOSITY 0
ENV APP_ENV dev
ENV APP_DEBUG 1
