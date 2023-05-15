FROM ubuntu/bind9:latest

RUN apt-get update && apt-get install -y bind9
RUN apt-get install -y dnsutils
RUN apt-get install -y iputils-ping
RUN apt-get install -y net-tools

COPY m1-2.ephec-ti.be /etc/bind/
COPY named.conf /etc/bind/
COPY reverse.m1-2.ephec-ti.be /etc/bind/

RUN mkdir /var/log/named

RUN apt-get install vim nano -y

EXPOSE 53/tcp
EXPOSE 53/udp

CMD ["named","-g"]