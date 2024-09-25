# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    script.sh                                          :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: cacarval <cacarval@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2024/09/25 13:39:41 by cacarval          #+#    #+#              #
#    Updated: 2024/09/25 13:39:42 by cacarval         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

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

    ./wp-cli.phar user create ${WP_USER} \
                              ${WP_EMAIL} \
                              --user_pass="${WP_USER_PASS}" \
                              --allow-root 
fi

exec php-fpm7.4 -F