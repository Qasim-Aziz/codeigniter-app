FROM php:7.2-apache
RUN apt-get update && \
    apt-get install -y
RUN apt-get install -y curl
RUN apt-get install -y build-essential libssl-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev

RUN docker-php-ext-install mysqli pdo pdo_mysql zip mbstring

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd

COPY ci4.conf /etc/apache2/sites-enabled/
RUN rm -f /etc/apache2/sites-enabled/000-default.conf
RUN a2enmod rewrite
COPY . /var/www/html/
RUN chmod 777 -R /var/www/html/Project
RUN chown www-data:www-data /var/www/html/Project

RUN service apache2 restart