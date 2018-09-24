install:
	docker-compose up -d
composer_install:
	docker-compose exec php composer install -n
