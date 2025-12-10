FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/lp/

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    libonig-dev \
    libzip-dev \
    jpegoptim optipng pngquant gifsicle \
    ca-certificates \
    vim \
    tmux \
    unzip \
    git \
    cron \
    supervisor \
    curl

# Install extensions

#RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
#        && pecl install imagick \
#        && docker-php-ext-enable imagick \
# Install Postgre PDO
RUN apt-get install -y libpq-dev \
    libmagickwand-dev \
        --no-install-recommends \
        && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
        && docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/ \
        && docker-php-ext-install pdo pdo_pgsql pgsql gd pdo_mysql mbstring zip exif pcntl

#RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/
#RUN docker-php-ext-install gd
# RUN pecl install -o -f redis &&  rm -rf /tmp/pear && docker-php-ext-enable redis

# Install NPM
#RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash -
#RUN apt-get install -y nodejs
# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
## Install composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy project ke dalam container
COPY . /var/www/lp/

# Copy directory project permission ke container
COPY --chown=www-data:www-data . /var/www/lp/
RUN chown -R www-data:www-data /var/www/lp
RUN chown -R www-data:www-data /var/log/supervisor

# Install dependency
RUN composer update --ignore-platform-req=ext-http
RUN php artisan key:generate
RUN php artisan storage:link
RUN chmod -R 777 storage bootstrap/cache
#RUN npm install

# Expose port 9000
EXPOSE 9000

# Tambahkan konfigurasi supervisor
COPY Docker/supervisor/ /etc/

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]

# Ganti user ke www-data
USER www-data
