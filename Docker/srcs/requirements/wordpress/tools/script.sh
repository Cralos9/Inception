#!/bin/bash

sleep 5

cd /var/www/html

if [ -f "wp-config.php" ]; then
    echo "WordPress is already installed."
else

    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar


    ./wp-cli.phar core download --allow-root

    ./wp-cli.phar config create --dbname="${DB_NAME}" \
                                --dbuser="${DB_USER}" \
                                --dbpass="${DB_PASSWORD}" \
                                --dbhost="${DB_HOST}" \
                                --allow-root

    ./wp-cli.phar core install --url="${WP_URL}" \
                               --title="${WP_TITLE}" \
                               --admin_user="${WP_ADMIN_USER}" \
                               --admin_password="${WP_ADMIN_PASSWORD}" \
                               --admin_email="${WP_ADMIN_EMAIL}" \
                               --allow-root
fi

php-fpm7.4 -F
