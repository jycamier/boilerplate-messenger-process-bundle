UID:=$(shell id -u)
GID:=$(shell id -g)

.PHONE: sf
sf:
	docker-compose exec -u www-data fpm bin/console $(CMD)

.PHONE: bash
bash:
	docker-compose exec -u www-data fpm ash

.PHONE: bash
cmd:
	docker-compose exec -u www-data fpm $(CMD)

.PHONE: install
install:
	docker-compose up -d
	docker-compose exec fpm ash -c "chown www-data:www-data /app"
	mutagen project list || mutagen project start
	$(MAKE) CMD='composer install' cmd
	$(MAKE) CMD='cleverage:process:execute install' sf

.PHONE: down
down:
	docker-compose down -v --remove-orphans
	mutagen project terminate
