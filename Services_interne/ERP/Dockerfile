FROM php:7.4-apache

RUN apt-get update && apt-get upgrade -y
RUN apt-get install nano -y
RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY ./www/index.php /var/www/html/index.php
COPY ./config/sites-available/local.conf /etc/apache2/sites-available/local.conf
COPY ./config/apache2.conf /etc/apache2/apache2.conf
COPY ./config/dir.conf /etc/apache2/mods-available/dir.conf

RUN a2ensite local.conf

EXPOSE 80/tcp





