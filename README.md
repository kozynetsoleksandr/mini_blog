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

Run migration

    docker-compose run --rm php yii migrate    

Run seeders

    docker-compose run --rm php yii seed    
    
Start the container

    docker-compose up -d
    
You can then access the application through the following URL:

    http://127.0.0.1:8000

**NOTES:** 
- Minimum required Docker engine version `17.04` for development (see [Performance tuning for volume mounts](https://docs.docker.com/docker-for-mac/osxfs-caching/))
- The default configuration uses a host-volume in your home directory `.docker-composer` for composer caches

