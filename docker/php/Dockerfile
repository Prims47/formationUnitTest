FROM alpine:3.8

MAINTAINER prims47

RUN apk add --update \
    php7-fpm \
    php7-apcu \
    php7-ctype \
    php7-curl \
    php7-dom \
    php7-gd \
    php7-iconv \
    php7-imagick \
    php7-json \
    php7-intl \
    php7-mcrypt \
    php7-mbstring \
    php7-opcache \
    php7-openssl \
    php7-pdo \
    php7-pdo_mysql \
    php7-mysqli \
    php7-xml \
    php7-zlib \
    php7-zip \
    php7-xmlwriter \
    php7-phar \
    php7-tokenizer \
    php7-session \
    php7-simplexml \
    php7-xdebug \
    make \
    curl

RUN rm -rf /var/cache/apk/* && rm -rf /tmp/* && \
    curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

RUN sed -e "s,listen = 127.0.0.1:9000, listen = 0.0.0.0:9000,g" -i /etc/php7/php-fpm.d/www.conf

CMD ["php-fpm7", "-F"]

WORKDIR /var/www/unitTest
EXPOSE 9000