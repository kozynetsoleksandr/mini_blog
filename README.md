<p align="center">
    <h1 align="center">mini blog for Onix by Kozynets Oleksandr</h1>
    <br>
</p>
### Start project with docker 

Copy repository

    git clone https://github.com/kozynetsoleksandr/mini_blog && cd mini_blog

Copy repository

    docker-compose run --rm php composer update --prefer-dist
    
Run the installation triggers (creating cookie validation code)

    docker-compose run --rm php composer install

Start the container

    docker-compose up -d

Run migration

    docker-compose run --rm php yii migrate    

Run seeders

    docker-compose run --rm php yii seed    
  
Run seeders

    sudo chgrp -R www-data . && sudo chmod -R g+w .    

You can then access the application through the following URL:

    http://127.0.0.1:8000

Default login: user, password: user

    http://127.0.0.1:8000

