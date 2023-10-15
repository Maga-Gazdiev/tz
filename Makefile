all: build run

build:
	composer install

run:
	php main.php

clean:
	rm -rf vendor
