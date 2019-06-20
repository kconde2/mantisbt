FROM php:7.2-apache

## Basic tools
RUN apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y bash \
            curl \
            wget \
            ca-certificates \
            nano

## PHP
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libxrender1 libfontconfig \
        libicu-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install pdo_mysql gd mbstring bcmath zip intl opcache mysqli fileinfo \
    && docker-php-ext-enable intl opcache

# Logs (mails, etc)
RUN mkdir -p /var/log
RUN touch /var/log/mantisbt.log
RUN chmod 777 /var/log/mantisbt.log

EXPOSE 80
