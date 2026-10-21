FROM php:8.3-apache
COPY refresh503.php /var/www/html/
COPY php2shell-get-only.conf /etc/apache2/conf-available/
RUN a2enconf php2shell-get-only
