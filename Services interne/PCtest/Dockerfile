FROM ubuntu:latest

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install -y dnsutils
RUN apt-get install -y iputils-ping
RUN apt-get install -y net-tools
RUN apt-get install -y nano
RUN apt-get install -y telnet

ADD resolv.conf /etc/resolv.conf.override

CMD cp /etc/resolv.conf.override /etc/resolv.conf tail -f /dev/null