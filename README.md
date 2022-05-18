# Comics website
1. **Determine the DB Structure**
    - comics
        - id | bigint
        - image | string(250)
        - title | string(100)
        - description | text
        - price | int
        - type | string(60)
        - series | string(100)
        - sale_date | date
1. **Create the DB in mySQL**
1. **.env file**
    - if .env exists:
        - update the fields about the db
    - id .env does not exist:
        - copy the .env.example file in the same folder
        - rename it to .env
        - execute command: php artisan key:generate
        - update the fields about the db
1. **<code>php artisan make:model --all Comic</code>**
    - **Model**
        - Comic
        - (<code>php artisan make:model Comic</code>)
    - **Controller**
        - ComicController
        - (<code>php artisan make:controller ComicController</code>)
    - **Migration**
        - create_Comics_table
        - (<code>php artisan make:migration create_Comics_table</code>)
    - **Seeder**
        - ComicSeeder
        - (<code>php artisan make:seeder ComicSeeder</code>)
1. In the migration define the database structure in the up method (and define the down method for the rollback).
1. Only for Laravel <= 7
    - <code>composer remove fzaninotto/faker</code>
    - <code>composer require fakerphp/faker</code>
1. In the seeder define the run method to populate the table from an array of values or using Faker.
1. **<code>php artisan migrate</code>**
1. **<code>php artisan db:seed --class=ComicSeeder</code>**
1. **Create the route in web.php**
1. **Create the views (blade files)**
1. If you wish to use the laravel-debugbar
    - <code>composer require barryvdh/laravel-debugbar --dev</code>
