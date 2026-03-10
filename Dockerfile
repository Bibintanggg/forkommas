FROM node:20 AS frontend

WORKDIR /app

COPY package*.json ./

