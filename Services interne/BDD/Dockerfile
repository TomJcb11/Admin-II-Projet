FROM mysql:latest



ENV MYSQL_USER=admin
ENV MYSQL_PASSWORD=root
ENV MYSQL_DATABASE=woodytoys_db

COPY ./woodytoys_db/mysql.conf.d /etc/mysql/mysql.conf.d
COPY ./woodytoys_db/mysql.sql /docker-entrypoint-initdb.d/



EXPOSE 3306
