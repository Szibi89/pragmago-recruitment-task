FROM php:8.2-cli

ARG ABSOLUTE_PATH=/app

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/

RUN apt-get -y update \
    && apt-get install -y unzip git libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN mkdir $ABSOLUTE_PATH

COPY . $ABSOLUTE_PATH

WORKDIR $ABSOLUTE_PATH

RUN composer install --prefer-source --no-plugins --no-interaction