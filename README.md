# Poll App

A web application that allows users to take part in various different polls and submit feeback.

## Application Setup

### 1. Install dependencies:

```
composer install // Laravel
npm install // Frontend
```

### 2. Generate Laravel App Key
```
php artisan key:generate
```

### 3. Set up the db

Create the `.env` file (can copy from `.env.example`) and update the credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cardinal_poll
DB_USERNAME=root
DB_PASSWORD=
```

Run Migrations (This will create the tables in the db)
```
php artisan migrate
```

Run Seeders (Pre-fill db with test records), Note: Need to be ran in the exact order as mentioned below:

```
php artisan db:seed DatabaseSeeder // create test users
php artisan db:seed PollSeeder // create polls
php artisan db:seed PollOptionSeeder // create poll options
```

### 4. Run Servers (Need to be running simultaneously):

```
php artisan serve // Laravel
npm run dev // Vite (frontend) asset bundle
```

&nbsp;

## Features

- After running the above commands, you will be able to access the application at [localhost:8000](http://localhost:8000).
- By default, the application supports two user roles: admin and user. The seeders should have created 5 users and 1 admin record in the db (all have a default test password of `password`).

## Optional

Can run simple tests that verify logic related to User and Polls using the command below:

```
php artisan test
```
