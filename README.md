# Poll App

A web application that allows users to take part in various different polls and submit feeback.

## Setting up the db

Create the `.env` file (can copy from `.env.example`) and update the credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cardinal_poll
DB_USERNAME=root
DB_PASSWORD=
```

### Run Migrations
This will create the tables in the db
```
php artisan migrate
```

### Run Seeders (Pre-fill db with test records)
Note: Need to be ran in the exact order as mentioned below:

```
php artisan db:seed DatabaseSeeder // create test users
php artisan db:seed PollSeeder // create polls
php artisan db:seed PollOptionSeeder // create poll options
```

## Application Setup

1. Install dependencies:

```
composer install // Laravel
npm install // Frontend
```

2. Run Servers (Should be running simultaneously):

```
php artisan serve // Laravel
npm run dev // Vite (frontend) asset compilcation
```

&nbsp;

## Demonstration

