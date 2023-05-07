FROM php:8.2-fpm-alpine

# Добавьте аргументы для идентификаторов пользователя и группы
ARG USER_ID=1000
ARG GROUP_ID=1000

# Создайте нового пользователя с указанными идентификаторами
RUN addgroup -g ${GROUP_ID} user && \
    adduser -D -u ${USER_ID} -G user user

# Установите необходимые пакеты и PHP-расширения
RUN apk add --no-cache \
        autoconf \
        g++ \
        make \
        icu-dev \
        postgresql-dev \
        zlib-dev \
        libzip-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install \
        intl \
        opcache \
        pdo \
        pdo_pgsql \
        zip

# Установите Xdebug
RUN apk add --no-cache $PHPIZE_DEPS linux-headers \
    && pecl install xdebug-3.2.1 \
    && docker-php-ext-enable xdebug

# Настройте Xdebug
COPY docker/php/conf.d/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Установите Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
