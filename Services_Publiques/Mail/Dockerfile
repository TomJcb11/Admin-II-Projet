FROM ubuntu:latest


RUN apt-get update && apt-get -y upgrade

RUN apt install dovecot-imapd dovecot-pop3d dovecot-core -y
RUN apt install postfix -y


COPY dovecot.conf /etc/dovecot
COPY main.cf /etc/postfix

CMD service postfix start && service dovecot start && tail -f /dev/null