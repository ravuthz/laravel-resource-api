# Post Resource API

### Initial Project
```
composer install

cp .env.example .env

php artisan key:generate

mysql -u root -p -e "create database laravel_resource_api"
mysql -u root -p -e "drop database laravel_resource_api; create database laravel_resource_api"
```


### Create Post resource (Migration, Model, Seed, Controller)
```
php artisan make:model Post -m
php artisan make:controller PostController

# or
php artisan make:model Post -mc

php artisan make:seeder PostsTableSeeder
```

### Update Post resource (Migration, Model, Seed, Controller)
```
php artisan migrate:refresh --seed
```

### Create and Implement Post Resource (API response template)
```
php artisan make:resource PostResource
```

### Make Testing

* Create Testing File
```
php artisan make:test PostApi --unit
```

* Create Testing and configure environment
```
cp .env .env.testing
```

* Create Testing Database
```
mysql -u root -p -e "create database laravel_resource_api_test"
```

* Migrate Testing Database
```
php artisan migrate:refresh --seed --env=testing
# or
APP_ENV=testing php artisan migrate --seed
```

* Run Testing Via Command Prompt
```
vendor\bin\phpunit tests\Unit\PostApi.php
composer test tests\Unit\PostApi.php
```

* Run Testing via Terminal or Shell
```
./vendor/bin/phpunit tests/Unit/PostApi.php
composer test tests/Unit/PostApi.php
```