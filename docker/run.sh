#!/bin/bash

APP_ROOT=/data/www/businesspadeltour.be

mv ${APP_ROOT}/docker-compose.yml ${APP_ROOT}/docker-compose.back.yml 
mv ${APP_ROOT}/docker-compose.prod.yml ${APP_ROOT}/docker-compose.yml 

docker compose up -d

