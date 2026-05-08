# Menggunakan base image PHP 8.2 dengan Apache
FROM php:8.2-apache

# Install sistem dependensi yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Bersihkan cache instalasi
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install ekstensi PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Aktifkan modul rewrite Apache (wajib untuk routing Laravel)
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Atur direktori kerja di dalam kontainer
WORKDIR /var/www/html

# Salin seluruh file proyek lokal ke dalam kontainer
COPY . /var/www/html

# Install dependensi PHP (Composer)
RUN composer install --no-dev --optimize-autoloader

# Atur perizinan folder storage dan bootstrap/cache agar bisa ditulis oleh server
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Ubah DocumentRoot Apache untuk mengarah ke folder public/ Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Ekspos port 80
EXPOSE 80