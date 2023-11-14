# Use the PHP-Apache base image
FROM php:8-apache

# Copy project files to the /var/www/html directory
COPY ../ /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache server in the foreground
CMD ["apache2-foreground"]