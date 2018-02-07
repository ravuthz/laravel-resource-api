##

### Initial Project
```
composer install

cp .env.example .env

php artisan key:generate

mysql -u root -p -e "create database laravel_resource_api"
mysql -u root -p -e "drop database laravel_resource_api; create database laravel_resource_api"
```


### Create Post resource
```
php artisan make:model Post -m
php artisan make:controller PostController
php artisan make:seeder PostsTableSeeder
```