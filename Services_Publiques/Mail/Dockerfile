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

EXPOSE 110
EXPOSE 143
EXPOSE 587
EXPOSE 465
EXPOSE 993

RUN openssl genrsa -out /etc/dovecot/ssl/mail.m1-2.ephec-ti.be.key 2048 
RUN openssl req -new -key /etc/dovecot/ssl/mail.m1-2.ephec-ti.be.key -out /etc/dovecot/ssl/mail.m1-2.ephec-ti.be.csr -subj "/C=BE/ST=Brabant-wallon/L=Louvain-La-Neuve/O=Ephec/OU=IT/CN=mail.m1-2.ephec-ti.be"
RUN openssl x509 -req -days 365 -in  /etc/dovecot/ssl/mail.m1-2.ephec-ti.be.csr -signkey  /etc/dovecot/ssl/mail.m1-2.ephec-ti.be.key -out  /etc/dovecot/ssl/mail.m1-2.ephec-ti.be.crt
RUN openssl rsa -in /etc/dovecot/ssl/mail.m1-2.ephec-ti.be.key -out /etc/dovecot/ssl/mail.m1-2.ephec-ti.be.key.nopass
RUN mv /etc/dovecot/ssl/mail.m1-2.ephec-ti.be.key.nopass /etc/dovecot/ssl/mail.m1-2.ephec-ti.be.key
RUN openssl req -new -x509 -extensions v3_ca -keyout cakey.pem -out /etc/dovecot/ssl/cacert.pem -days 3650 -passout pass:adminii -subj "/C=BE/ST=Brabant-wallon/L=Louvain-La-Neuve/O=Ephec/OU=IT/CN=mail.m1-2.ephec-ti.be"


RUN openssl genrsa -out /etc/postfix/ssl/mail.m1-2.ephec-ti.be.key 2048 
RUN openssl req -new -key /etc/postfix/ssl/mail.m1-2.ephec-ti.be.key -out /etc/postfix/ssl/mail.m1-2.ephec-ti.be.csr -subj "/C=BE/ST=Brabant-wallon/L=Louvain-La-Neuve/O=Ephec/OU=IT/CN=mail.m1-2.ephec-ti.be"
RUN openssl x509 -req -days 365 -in  /etc/postfix/ssl/mail.m1-2.ephec-ti.be.csr -signkey  /etc/postfix/ssl/mail.m1-2.ephec-ti.be.key -out  /etc/postfix/ssl/mail.m1-2.ephec-ti.be.crt
RUN openssl rsa -in /etc/postfix/ssl/mail.m1-2.ephec-ti.be.key -out /etc/postfix/ssl/mail.m1-2.ephec-ti.be.key.nopass
RUN mv /etc/postfix/ssl/mail.m1-2.ephec-ti.be.key.nopass /etc/postfix/ssl/mail.m1-2.ephec-ti.be.key
RUN openssl req -new -x509 -extensions v3_ca -keyout cakey.pem -out /etc/postfix/ssl/cacert.pem -days 3650 -passout pass:adminii -subj "/C=BE/ST=Brabant-wallon/L=Louvain-La-Neuve/O=Ephec/OU=IT/CN=mail.m1-2.ephec-ti.be"

CMD service postfix start && service dovecot start && tail -f /dev/null