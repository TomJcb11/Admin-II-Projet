FROM php:8.0-apache


RUN apt-get update && apt full-upgrade -y \
    && apt-get install nano -y
RUN apt-get install -y net-tools bind9 bind9utils dnsutils iputils-ping
RUN docker-php-ext-install mysqli pdo pdo_mysql



COPY /www/index.php /var/www/index.php
COPY /config/sites-available/local.conf /etc/apache2/sites-available/local.conf
COPY /config/apache2.conf /etc/apache2/apache2.conf

EXPOSE 80

RUN a2dissite 000-default.conf
RUN a2ensite local.conf




