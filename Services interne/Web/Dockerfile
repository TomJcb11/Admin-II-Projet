FROM ubuntu/apache2:latest

# Installez quelques outils utiles pour le débogage
RUN apt-get update && apt full-upgrade -y \
    && apt-get install nano -y

# Ajoutez les fichiers nécessaires au serveur apache pour initialiser tous les hôtes virtuels.
ADD ./www/ /var/www/
ADD ./sites-available/ /etc/apache2/sites-available/

COPY apache2.conf /etc/apache2/apache2.conf
COPY ./www/index.html /var/www/html/index.html

RUN a2ensite www.conf

# Redémarrez le service apache pour "activer" les hôtes virtuels
RUN service apache2 start


