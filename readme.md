# Login and Register with Laravel 5.8 using JWTAuth

This project was developed with Laravel 5.8

## How install

you must have installed composer and npm.

Clone Project and run `composer install` to install PHP project dependencies, run `npm install` to install JAVASCRIPT project dependencies, run `cp .env.example .env` to create .env file of project, run `php artisan key:generate` to generate your key of project.

## How configure database

Open .env file and edit `DB_DATABASE` value with your database name, edit `DB_USERNAME` value with your username of database, edit `DB_PASSWORD` value with your password of database.

To finish run `php artisan migrate` to generate tables in database.

## How use

Run `php artisan serve` and open `http://localhost:8000`