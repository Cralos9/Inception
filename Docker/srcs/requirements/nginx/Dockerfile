FROM debian:bullseye

RUN apt-get update && apt-get upgrade -y && apt-get install -y \
    nginx \
    openssl 

RUN mkdir -p /etc/nginx/ssl

RUN openssl req -newkey rsa:2048 -nodes -keyout /etc/nginx/ssl/nginx.key -x509 -days 365 -out /etc/nginx/ssl/nginx.crt \
    -subj "/C=PT/ST=Porto/L=Porto/O=42Porto/OU=42Porto/CN=cacarval.42.fr"
 
    COPY ./conf/default.conf /etc/nginx/conf.d/ng.conf

CMD ["nginx", "-g", "daemon off;"]
