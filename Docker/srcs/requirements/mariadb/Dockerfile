FROM debian:bullseye

RUN apt-get update && apt-get install -y \
    mariadb-server


COPY 50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY init.sql /etc/mysql/init.sql

RUN mkdir /run/mysqld 

EXPOSE 3306

CMD ["mysqld"]