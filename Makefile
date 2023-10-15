all: build run test

build:
	composer install

run:
	php main.php

test:
	vendor/bin/phpunit tests

clean:
	rm -rf vendor
