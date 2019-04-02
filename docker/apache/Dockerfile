FROM php:7.0-apache
#RUN docker-php-source extract \
    # do important things \
   # && docker-php-source delete \\
RUN apt-get update && apt-get install -y \
    && docker-php-ext-install -j$(nproc) mysqli
EXPOSE 80
