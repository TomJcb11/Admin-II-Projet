FROM ubuntu:latest

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    ca-certificates \
    curl \
    wget \
    nano \
    vim-tiny \
    && rm -rf /var/lib/apt/lists/*

RUN apt update
RUN apt install -y bind9 bind9utils bind9-doc dnsutils

COPY named.conf_soa /etc/bind/named.conf
COPY forward.intranet_soa /etc/bind/
COPY reverse.intranet_soa /etc/bind/

EXPOSE 53/TCP 53/UDP

CMD ["named", "-g"]


