## Clone the project

git clone https://github.com/awoodsT/simple-test.git

## DOCKER install
Ensure that your local machine has docker, if not go to link bellow and install it
https://docs.docker.com/engine/install/

## Go to the project folder and run the commands
cp .env.example .env
docker-compose build
docker-compose up -d
docker-compose exec app composer i
docker-compose exec app artisan migrate
docker-compose exec app php artisan test

