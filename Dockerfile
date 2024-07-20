# Use the official PHP image with PHP 8.1 and FPM
FROM php:8.1-fpm

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . .

# Install any needed packages here if necessary, for example:
RUN docker-php-ext-install pdo pdo_mysql

# Expose port 9000 for PHP-FPM
EXPOSE 9000