FROM php:7.2-apache
WORKDIR /var/www/html
COPY ./.idea/src /var/www/html
EXPOSE 80