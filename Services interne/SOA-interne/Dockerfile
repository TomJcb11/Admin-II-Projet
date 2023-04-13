FROM ubuntu:latest

RUN apt-get update && \
    apt-get install net-tools bind9 bind9-utils dnsutils nano -y 

COPY named.conf /etc/bind/named.conf
COPY named.conf_soa /etc/bind/named.conf_soa
COPY forward.intranet_soa /etc/bind/forward.intranet_soa
COPY reverse.intranet_soa /etc/bind/reverse.intranet_soa

EXPOSE 53/TCP 53/UDP

CMD ["named", "-g"]


