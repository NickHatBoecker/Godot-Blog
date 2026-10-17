#!/bin/bash

source .env

if [ -z "$1" ]; then
  containerName="${COMPOSE_PROJECT_NAME}_php"
else
  containerName="${COMPOSE_PROJECT_NAME}_$1"
fi

echo "Login into $containerName"
docker exec -it "$containerName" bash
