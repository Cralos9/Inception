DOCKER_COMPOSE_PATH = ./srcs/docker-compose.yml
VOLUMES=$$(docker volume ls -q)


build:
	@docker compose -f ${DOCKER_COMPOSE_PATH} up -d --build
down:
	@docker compose -f ${DOCKER_COMPOSE_PATH} down
clean: down
	@docker volume rm ${VOLUMES}
	@docker system prune -a


re: clean build