FROM ubuntu:latest

RUN apt update

RUN apt install dovecot-imapd dovecot-pop3d -y
RUN apt install postfix -y
RUN apt install nano -y

COPY dovecot.conf /etc/dovecot/
COPY main.cf /etc/postfix/
COPY master.cf /etc/postfix/
RUN mkdir -p /etc/postfix/ssl/
RUN mkdir -p /etc/dovecot/ssl/
RUN apt install certbot -y
RUN apt install openssl -y
RUN adduser louis
RUN adduser dmarc

EXPOSE 110
EXPOSE 143
EXPOSE 587
EXPOSE 465
EXPOSE 993
EXPOSE 80

COPY ./certbot/fullchain.pem /etc/dovecot/ssl/
COPY ./certbot/privkey.pem /etc/dovecot/ssl/
COPY ./certbot/fullchain.pem /etc/postfix/ssl/
COPY ./certbot/privkey.pem /etc/postfix/ssl/

CMD service postfix start && service dovecot start && tail -f /dev/null