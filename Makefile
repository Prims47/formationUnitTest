install:
	docker-compose up -d
composer_install:
	docker-compose exec php composer install -n

unit_test:
	docker-compose exec php ./vendor/bin/simple-phpunit tests/AppBundle/