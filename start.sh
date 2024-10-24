#!/bin/bash

docker-compose up --detach

[ ! -d ./docker-data/assets ] && mkdir -p ./docker-data/assets
[ ! -d ./docker-data/logs ] && mkdir -p ./docker-data/logs
[ ! -d ./docker-data/private-files ] && mkdir -p ./docker-data/private-files
[ ! -d ./docker-data/public-files ] && mkdir -p ./docker-data/public-files
[ ! -f ./docker-data/logs/app.log ] && touch ./docker-data/logs/app.log

chown -R www-data:www-data ./docker-data/assets ./docker-data/logs ./docker-data/private-files ./docker-data/public-files
