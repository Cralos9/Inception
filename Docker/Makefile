DOCKER_COMPOSE_PATH = ./srcs/docker-compose.yml

build:
	@docker compose -f ${DOCKER_COMPOSE_PATH} up -d --build
down:
	@docker compose -f ${DOCKER_COMPOSE_PATH} down
clean: down
	@docker system prune -a
	@sudo rm -rf ./srcs/web ./srcs/database

re: clean build