# image
FROM php:7.3-apache

# Set php.ini
COPY ./php.ini /usr/local/etc/php/

FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/
RUN apt-get update && docker-php-ext-install mysqli pdo_mysql

# Set apache conf (After tag:5.5-apache)
# ENV APACHE_DOCUMENT_ROOT /var/www/html/test
# RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
# RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install MySQL connection module
RUN apt-get update \
  && apt-get install -y libpq-dev \
  && docker-php-ext-install pdo_mysql pdo_pgsql mysqli mbstring