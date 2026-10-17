#!/bin/bash
echo "Shutting down container and starting after build..."
docker-compose down && docker-compose up -d
