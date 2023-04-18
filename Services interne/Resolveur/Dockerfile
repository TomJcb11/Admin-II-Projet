FROM ubuntu/bind9:latest

RUN apt-get update && \
    apt-get install net-tools dnsutils nano -y 

COPY named.conf /etc/bind/

ADD resolv.conf /etc/resolv.conf.override

EXPOSE 53/TCP 53/UDP

CMD cp /etc/resolv.conf.override /etc/resolv.conf && named && -g
