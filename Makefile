.PHONE: sf
sf:
	docker-compose exec -u www-data fpm bin/console $(CMD)

.PHONE: bash
bash:
	docker-compose exec -u www-data fpm ash

.PHONE: cmd
cmd:
	docker-compose exec -u www-data fpm $(CMD)

.PHONE: install
install:
	docker-compose up -d
	mutagen project list || mutagen project start
	$(MAKE) CMD='composer install' cmd
	$(MAKE) CMD='cleverage:process:execute install' sf

.PHONE: down
down:
	docker-compose down -v --remove-orphans
	mutagen project terminate || true
