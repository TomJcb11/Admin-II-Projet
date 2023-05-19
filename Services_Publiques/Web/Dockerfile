FROM php:7.4-apache

RUN apt-get update && apt-get upgrade -y
RUN apt-get install nano -y
RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY ./sites/b2b/index.php /var/www/html/index.php
COPY ./sites/wwww/index.html /var/www/html/index.html
COPY ./config/sites-available/local.conf /etc/apache2/sites-available/local.conf
COPY ./config/apache2.conf /etc/apache2/apache2.conf

RUN a2ensite local.conf

EXPOSE 80/tcp
