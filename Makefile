up:
	docker compose build

start:
	docker compose up -d

restart:
	docker compose restart

down:
	docker compose down

php:
	docker compose exec todochecker-app bash