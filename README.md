## Small Laravel Application, using Larapex Charts with Livewire

This is a small Laravel application, using Larapex Charts with Livewire. It is a simple application that shows the number of users registered in the last 7 days.

## Installation

Clone the repository-

```
git clone
```

Then cd into the folder with this command-

```
cd larapex-charts-livewire
```

Then do a composer install

```
composer install
```

Then create a .env file

```
cp .env.example .env
```

Then generate the application key

```
php artisan key:generate
```

Then create an empty database for the application. In the .env file, add database information to allow Laravel to connect to the database

```
DB_HOST=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Then migrate the database

```
php artisan migrate
```

Then seed the database

```
php artisan db:seed
```

Then start the server

```
php artisan serve
```

## Output of Application

Image 1: Chart with data

![public\images\img_1.png]("public\images\img_1.png")
