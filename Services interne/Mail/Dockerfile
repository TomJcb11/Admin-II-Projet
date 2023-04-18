# on dit de quelle image on va se servire.
FROM ubuntu:latest

# on dit ce qu'on installer dans le conteneur. 
RUN apt-get update && apt-get -y upgrade

# on installe nos service besoin.
RUN apt-get install -y postfix
RUN apt-get install -y dovecot-imapd 
RUN apt-get install -y dovecot-pop3d
RUN apt-get install -y dovecot-core

#pour les test ;port, IP, mail :
RUN apt-get install -y nmap
RUN apt-get install -y nano
RUN apt-get install -y net-tools
RUN apt-get install -y telnet
RUN adduser contact
RUN adduser moi

COPY dovecot.conf /etc/dovecot
COPY main.cf /etc/postfix

EXPOSE 25 
EXPOSE 110 
EXPOSE 143
# SMTP  POP3  IMAP


# RUN echo "nameserver 172.16.0.2 \n options ndots:0" > /etc/resolv.conf
CMD service postfix start && service dovecot start && tail -f /dev/null
