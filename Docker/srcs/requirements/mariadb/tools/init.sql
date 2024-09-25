# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    init.sql                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: cacarval <cacarval@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2024/09/25 13:39:15 by cacarval          #+#    #+#              #
#    Updated: 2024/09/25 13:39:23 by cacarval         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

CREATE DATABASE wordpress;
CREATE USER 'wpuser'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'wpuser'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;