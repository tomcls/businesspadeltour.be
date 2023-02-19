#!/bin/bash

APP_ROOT=/data/www/businesspadeltour.be

mv ${APP_ROOT}/docker-compose.yml ${APP_ROOT}/docker-compose.back.yml 
mv ${APP_ROOT}/docker-compose.prod.yml ${APP_ROOT}/docker-compose.yml 
mv ${APP_ROOT}/.env ${APP_ROOT}/.env.back
cp ${APP_ROOT}/.env.prod ${APP_ROOT}/.env
docker compose up -d

