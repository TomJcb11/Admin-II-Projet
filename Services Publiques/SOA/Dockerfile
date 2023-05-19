FROM ubuntu/bind9:latest

RUN apt-get update && apt-get install -y bind9
RUN apt-get install -y dnsutils
RUN apt-get install -y iputils-ping
RUN apt-get install -y net-tools

# Créer le répertoire des journaux
RUN mkdir /var/log/named/

# Créer le fichier de journal de requêtes
RUN touch /var/log/named/query.log

# Définir le propriétaire du répertoire des journaux
RUN chown -R bind /var/log/named/

COPY m1-2.ephec-ti.be /etc/bind/
COPY named.conf /etc/bind/
COPY reverse.m1-2.ephec-ti.be /etc/bind/

RUN apt-get install vim nano -y

EXPOSE 53/tcp
EXPOSE 53/udp

CMD ["named", "-g"]
