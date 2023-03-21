FROM php:8.0-apache


RUN apt-get update && apt-get install -y 
RUN apt-get update && apt-get install -y bind9
RUN apt-get install -y dnsutils net-tools iputils-ping
RUN apt-get install -y curl 
RUN apt-get install nano -y
RUN docker-php-ext-install mysqli



COPY ./www/index.php /var/www/index.php
COPY ./config/sites-available/local.conf /etc/apache2/sites-available/
COPY ./config/apache2.conf /etc/apache2/apache2.conf


RUN a2ensite local.conf







