FROM php:7.4-apache

# Ativação do módulo de reescrita
RUN a2enmod rewrite

# Instalação da extensão PDO MySQL
RUN docker-php-ext-install pdo_mysql

# Instalação da extensão ZipArchive
RUN apt-get update && apt-get install -y zlib1g-dev libzip-dev

# Instalação do libmemcached
RUN apt-get install -y libmemcached-dev

# Instala a extensão Memcached usando pecl
RUN pecl install memcached && \
    docker-php-ext-enable memcached
