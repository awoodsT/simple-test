## Clone the project

git clone https://github.com/awoodsT/simple-test.git

## DOCKER install
Ensure that your local machine has docker, if not go to link bellow and install it
<p>https://docs.docker.com/engine/install/</p>

## Go to the project folder and run the commands
<p>cp .env.example .env</p>
<p>docker-compose build</p>
<p>docker-compose up -d</p>
<p>docker-compose exec app composer i</p>
<p>docker-compose exec app artisan migrate</p>
<p>docker-compose exec app php artisan test</p>

