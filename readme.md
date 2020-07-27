# ToDo List (with Burndown Chart) - Laravel, Vue.js & Chart.js
This Basic todo list, that allows users to register, log in, and create tasks that are saved against their account. It includes the dynamic burndown chart, that displays the number of tasks that were not yet completed at each minute in the last hour. It is created in laravel 5.8 version
## Installation Steps
**Clone the repo**
```
https://github.com/abhiyadav001/todo_list.git todo_list
```
**Run composer install**
```
composer install
```
**Setup Timezone in .env**
```
APP_TZ=Asia/Kolkata
```

**Configure MySQL connection details in .env**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT={database port}
DB_DATABASE={database name}
DB_USERNAME={database user}
DB_PASSWORD={database password}
```
**Run database migrations and seeders**
```
php artisan migrate
php artisan db:seed
```
## Running the application
Run the application in a **Virtual Host**
To run the application, got o the project root and run
```
php artisan serve
```

#### You can have some default users by running seeder
User credentials are as follows
```
1. Email: abhi@example.com | Password: password
2. Email: abhi1@example.com | Password: password
```
## PHPUnit Test
To run the unit test, go to the project root and run
```
./vendor/bin/phpunit
```
