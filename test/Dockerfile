FROM nimmis/apache-php5

MAINTAINER EVatom "admin@ti0s.com"

RUN rm /var/www/html/index.html && chown www-data:www-data /var/www/html -R
COPY src /var/www/html
COPY push.sh /mnt/push.sh
EXPOSE 80
