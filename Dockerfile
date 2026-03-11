FROM php:8.2-fpm-alpine AS builder

RUN apk --no-cache add curl git

RUN docker-php-ext-configure pdo_mysql \
    && docker-php-ext-install -j"$(nproc)" pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

COPY composer*.json ./
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

COPY . .
RUN composer run-script post-autoload-dump || true \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache


FROM php:8.2-fpm-alpine AS runner

RUN apk --no-cache add curl \
    && docker-php-ext-configure pdo_mysql \
    && docker-php-ext-install -j"$(nproc)" pdo_mysql

COPY docker/php.ini /usr/local/etc/php/conf.d/40-custom.ini

RUN addgroup -g 1001 -S php && adduser -u 1001 -S php -G php

WORKDIR /var/www

COPY --from=builder --chown=php:php /var/www ./

RUN mkdir -p storage/logs storage/framework/cache storage/framework/sessions storage/framework/views bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache \
    && chown -R php:php storage bootstrap/cache

USER php

EXPOSE 9000

CMD ["php-fpm"]
