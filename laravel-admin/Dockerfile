FROM php:8.1

RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql
RUN pecl install redis \
    && docker-php-ext-enable redis.so   

WORKDIR /app
COPY . .

# RUN composer install

CMD php artisan serve --host=0.0.0.0
EXPOSE 8000