FROM php:7.4-apache

RUN apt-get update && apt-get upgrade -y
RUN apt-get install nano -y
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apt install -y openssl certbot python3-certbot-apache




COPY ./config/sites-availables/b2b.m1-2.ephec-ti.be.conf /etc/apache2/sites-available/
COPY ./config/sites-availables/www.m1-2.ephec-ti.be.conf /etc/apache2/sites-available/
COPY ./config/apache2.conf /etc/apache2/apache2.conf
COPY ./sites/www /var/www/www.m1-2.ephec-ti.be
COPY ./sites/b2b /var/www/b2b.m1-2.ephec-ti.be

RUN openssl genrsa -out /etc/ssl/certs/private.key 2048
RUN openssl req -sha256 -new -key /etc/ssl/certs/private.key -out /etc/ssl/certs/csr.pem -subj "/C=BE/ST=Bruxelles/L=Louvain-La-Neuve/O=Ephec/OU=IT/CN=www.m1-2.ephec-ti.be"


RUN a2enmod ssl
RUN a2ensite b2b.m1-2.ephec-ti.be.conf
RUN a2ensite www.m1-2.ephec-ti.be.conf


