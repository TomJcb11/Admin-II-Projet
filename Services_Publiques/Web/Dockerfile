FROM php:7.4-apache

RUN apt-get update && apt-get upgrade -y
RUN apt-get install nano -y
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apt install -y openssl certbot python3-certbot-apache

COPY ./config/sites-availables/b2b.m1-2.ephec-ti.be.conf /etc/apache2/sites-available/
COPY ./config/sites-availables/www.m1-2.ephec-ti.be.conf /etc/apache2/sites-available/
COPY ./config/apache2.conf /etc/apache2/apache2.conf


COPY ./certbot/b2bfullchain.pem /etc/ssl/certs/
COPY ./certbot/b2bprivkey.pem /etc/ssl/certs/ 
COPY ./certbot/fullchain.pem /etc/ssl/certs/
COPY ./certbot/privkey.pem /etc/ssl/certs/ 

RUN a2enmod ssl
RUN a2ensite b2b.m1-2.ephec-ti.be.conf
RUN a2ensite www.m1-2.ephec-ti.be.conf

COPY ./sites/www /var/www/www.m1-2.ephec-ti.be
COPY ./sites/b2b /var/www/b2b.m1-2.ephec-ti.be
