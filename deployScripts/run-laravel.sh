cd /home/ubuntu/questionnaire
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan migrate