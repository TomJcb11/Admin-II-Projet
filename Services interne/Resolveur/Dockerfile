FROM ubuntu/bind9:latest

RUN apt-get update && \
    apt-get install net-tools dnsutils nano -y 

COPY named.conf /etc/bind/


EXPOSE 53/TCP 53/UDP

CMD ["named", "-g"]
