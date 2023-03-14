FROM ubuntu/bind9:latest

RUN apt-get intall nano


COPY named.conf /etc/bind/named.conf

EXPOSE 53

CMD ["named", "-c", "/etc/bind/named.conf", "-g"]

