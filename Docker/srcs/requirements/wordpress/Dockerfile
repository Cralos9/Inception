# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: cacarval <cacarval@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2024/09/25 13:39:45 by cacarval          #+#    #+#              #
#    Updated: 2024/09/25 13:39:46 by cacarval         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:bullseye

RUN apt-get update && apt-get install -y \
    php7.4-fpm \
    php-mysqli \
    curl

RUN mkdir /run/php/

COPY ./conf/www.conf /etc/php/7.4/fpm/pool.d/.
COPY ./tools/script.sh .
RUN chmod +x script.sh

EXPOSE 9000

CMD ["./script.sh"]