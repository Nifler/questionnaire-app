cd /home/ubuntu/questionnaire
docker-compose exec php composer install
docker-compose exec php cp .env.example .env