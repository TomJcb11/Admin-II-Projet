FROM ubuntu:latest

RUN apt update

RUN apt install dovecot-imapd dovecot-pop3d -y
RUN apt install postfix -y
RUN apt install nano -y

COPY dovecot.conf /etc/dovecot/
COPY main.cf /etc/postfix/
COPY master.cf /etc/postfix/

RUN apt install certbot -y
RUN apt install openssl -y

EXPOSE 110
EXPOSE 143
EXPOSE 587
EXPOSE 465

CMD service postfix start && service dovecot start && tail -f /dev/null