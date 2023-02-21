#!/bin/bash

APP_ROOT=/data/www/businesspadeltour.be

env=tcl
port=8001
name=padel-php
docker rm -f ${name}
docker build --file=${APP_ROOT}"/docker/prod/php8.2/Dockerfile"  -t padel/php .
docker run --name ${name} \
  -v ${APP_ROOT}:/var/www/html \
  -d padel/php 

docker rm -f padel-nginx
docker build --file=${APP_ROOT}"/docker/prod/nginx/Dockerfile"   -t padel/nginx .

docker run   --name padel-nginx \
--link ${name} \
-p  71:80 \
-v  $APP_ROOT:/usr/share/nginx/html \
-v  $APP_ROOT/docker/prod/nginx/sites-available/default.conf:/etc/nginx/conf.d/default.conf \
-d padel/nginx

