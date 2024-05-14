from php:8.0.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www