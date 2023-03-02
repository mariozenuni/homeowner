FROM php:8.1 as php

RUN apt-get update -y
RUN apt-get install -y unzip libpq-dev libcurl4-gnutls-dev
RUN docker-php-ext-install pdo pdo_mysql bcmath
RUN apt-get update && \
apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
docker-php-ext-install gd
WORKDIR /var/www
COPY . .

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV PORT=8000
ENTRYPOINT [ "bash" , "entrypoint.sh" ]