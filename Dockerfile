# 1. Menggunakan Base Image PHP 8.2 dengan ekstensi FPM & Alpine (sangat ringan)
FROM php:8.2-fpm-alpine

# 2. Menginstal system dependencies yang dibutuhkan Laravel
RUN apk add --no-cache \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm

# 3. Menginstal ekstensi PHP yang dibutuhkan
RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install gd \
    && docker-php-ext-install bcmath

# 4. Menginstal Composer (Package Manager PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Set Working Directory
WORKDIR /var/www/html

# 6. Salin semua file proyek ke dalam container
COPY . .

# 7. Install dependency PHP via Composer
RUN composer install --optimize-autoloader --no-dev

# 8. Set permission folder (agar Laravel bisa menulis file cache/log)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 9. Buka Port 9000 (Standar PHP-FPM)
EXPOSE 9000

# 10. Perintah yang dijalankan saat container hidup
CMD ["php-fpm"]
