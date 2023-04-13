FROM ubuntu/bind9:latest

RUN apt-get update && \
    apt-get install net-tools dnsutils nano -y 

COPY named.conf /etc/bind/
COPY forward.intranet_soa /etc/bind/
COPY reverse.intranet_soa /etc/bind/

EXPOSE 53/TCP 53/UDP

CMD ["named", "-g"]


