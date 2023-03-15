FROM ubuntu:latest

RUN apt-get update && apt-get -y upgrade
RUN apt-get install -y rsyslog
RUN apt-get install -y postfix
RUN apt-get install -y dovecot-imapd dovecot-pop3d

COPY etc/postfix/main.cf /etc/postfix/main.cf
COPY etc/postfix/master.cf /etc/postfix/master.cf

COPY etc/dovecot/conf.d/* /etc/dovecot/conf.d/
COPY etc/dovecot/dovecot.conf /etc/dovecot/dovecot.conf

COPY users /users


RUN apt update && \
    apt upgrade -y && \
    apt install -y postfix


RUN apt install -y dovecot-imapd dovecot-pop3d dovecot-core

COPY start.sh /start.sh

RUN chmod +x /start.sh

COPY etc/hosts /etc/hosts

EXPOSE 456

CMD ["sh", "-c", "/start.sh"]