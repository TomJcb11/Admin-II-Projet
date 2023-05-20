FROM php:7.4-apache

RUN apt-get update && apt-get upgrade -y
RUN apt-get install nano -y
RUN docker-php-ext-install mysqli pdo pdo_mysql


COPY ./config/sites-availables/b2b.conf /etc/apache2/sites-available/b2b.conf
COPY ./config/sites-availables/www.conf /etc/apache2/sites-available/www.conf
COPY ./config/apache2.conf /etc/apache2/apache2.conf
COPY ./sites/www /var/www/html/www
COPY ./sites/b2b /var/www/html/b2b

RUN a2ensite b2b.conf
RUN a2ensite www.conf


