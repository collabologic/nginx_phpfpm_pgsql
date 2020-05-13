FROM php:7.3.6-fpm

ENV TZ Asia/Tokyo

RUN apt-get update -qq && \
    apt-get install --no-install-recommends -y libpq-dev git zip unzip && \
    apt-get clean && \
    rm -rf /var/cache/apt

RUN docker-php-ext-install mbstring pdo pdo_pgsql

# php.conf php-fpm.conf の変更が必要な場合は、同じディレクトリにファイルを作成して、以下のコメントを外してください
#COPY ./php.ini /usr/local/etc/php/php.ini
#COPY ./docker.conf /usr/local/etc/php-fpm.d/docker.conf

