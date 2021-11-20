This repository is inspired by [https://github.com/ucan-lab/docker-laravel](https://github.com/ucan-lab/docker-laravel).<br>

I appreciate this repository.

# laravel-starter(sanctum)

This repository is starter kit to create your new project(API).<br>

Included Sanctum. 

## Usage

```bash
$ git clone git@github.com:You-saku/Laravel_API_Stater_Kit_Sanctum.git
$ cd Laravel_API_Stater_Kit_Sanctum
$ docker-compose up -d
$ docker-compose exec php composer install
```

http://localhost

## Tips

- Read this [Makefile](https://github.com/ucan-lab/docker-laravel/blob/main/Makefile).

## Container structures

```bash
├── app
├── web
└── db
```

### app container

- Base image
  - [php](https://hub.docker.com/_/php):8.0-fpm-buster
  - [composer](https://hub.docker.com/_/composer):2.0

### web container

- Base image
  - [nginx](https://hub.docker.com/_/nginx):1.20-alpine
  - [node](https://hub.docker.com/_/node):16-alpine

### db container

- Base image
  - [mysql/mysql-server](https://hub.docker.com/r/mysql/mysql-server):8.0
