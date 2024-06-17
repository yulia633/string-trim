install:
	composer install

validate:
	composer validate

lint:
	composer exec -v phpcs -- --standard=PSR12 src tests -np

test:
	composer exec -v phpunit tests
