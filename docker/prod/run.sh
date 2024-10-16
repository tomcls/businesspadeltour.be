#!/bin/bash

APP_ROOT=/data/www/businesspadeltour.be

env=tcl
port=8001
name=padel-php
docker rm -f ${name}
docker build --file=${APP_ROOT}"/docker/prod/php8.2/Dockerfile"  -t padel/php .
docker run --name ${name} \
  -v ${APP_ROOT}:/var/www/html \
  -v /data/nfs/businesspadeltour/images:/var/www/html/public/images \
  -v /data/nfs/businesspadeltour/videos:/var/www/html/public/videos \
  -v /data/nfs/businesspadeltour/storage/app:/var/www/html/storage/app \
  -v /data/volumes/businesspadeltour/livewire:/var/www/html/storage/app/livewire \
  -v /data/volumes/businesspadeltour/livewire-tmp:/var/www/html/storage/app/livewire-tmp \

  -it padel/php 
