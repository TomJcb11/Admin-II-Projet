# on dit de quelle image on va se servire.
FROM ubuntu:latest

# on dit ce qu'on installer dans le conteneur. 
RUN apt-get update && apt-get -y upgrade
RUN apt-get install -y rsyslog

# on instale nos service besoin.
RUN apt-get install -y postfix
RUN apt-get install -y dovecot-imapd dovecot-pop3d

COPY dovecot.conf /etc/dovecot
COPY main.cf /etc/postfix

EXPOSE 456 25 110 143
# ??  SMTP  POP3  IMAP

#CMD ["/bin/bash", "-c"]