# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: cacarval <cacarval@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2024/09/25 13:39:02 by cacarval          #+#    #+#              #
#    Updated: 2024/09/25 13:39:02 by cacarval         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

DOCKER_COMPOSE_PATH = ./srcs/docker-compose.yml
VOLUMES=$$(docker volume ls -q)


build:
	@mkdir -p /home/cacarval/data
	@docker compose -f ${DOCKER_COMPOSE_PATH} up -d --build
down:
	@docker compose -f ${DOCKER_COMPOSE_PATH} down
clean: down
	@docker volume rm ${VOLUMES}
	@docker system prune -a
	@sudo rm -rf /home/cacarval/data

re: clean build