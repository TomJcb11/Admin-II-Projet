FROM ubuntu:latest

RUN apt-get update --fix-missing -y && apt-get upgrade -y
RUN apt-get install -y dnsutils
RUN apt-get install -y iputils-ping
RUN apt-get install -y net-tools
RUN apt-get install -y nano
RUN apt-get install -y telnet
RUN apt-get install -y links

ADD /resolv.conf /etc/resolv.conf.override


CMD tail -f /dev/null