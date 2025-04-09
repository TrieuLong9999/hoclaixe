# Sử dụng image chính thức của PHP và Apache
FROM php:8.1-apache

# Cài đặt các phần mềm phụ trợ cần thiết
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip mysqli opcache

# Cài đặt Composer để quản lý các phụ thuộc PHP
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Sao chép mã nguồn WordPress của bạn vào thư mục gốc của container
COPY . /var/www/html/

# Cấp quyền cho Apache để có thể đọc ghi mã nguồn WordPress
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Cấu hình Apache để hỗ trợ các .htaccess và mod_rewrite
RUN a2enmod rewrite

# Expose cổng 80
EXPOSE 80

# Lệnh khởi động Apache
CMD ["apache2-foreground"]
