FROM php:7.3.4-apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
COPY src/ /var/www/html/
