up:
	docker-compose up -d --build

enter:
	docker-compose exec apache bash

log:
	docker-compose exec apache cat /var/log/mantisbt.log

stop:
	docker-compose stop

down:
	docker-compose down
