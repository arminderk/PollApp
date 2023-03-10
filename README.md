# Poll App

A web application that allows users to take part in various different polls and submit feedback.

## Features

- After the application is setup, you will be able to access the application at [localhost:8000](http://localhost:8000).
- By default, the application supports two user roles: admin and user. The seeders will create 5 users and 1 admin record in the db (all have a default test password of `password`).
- Admin Functionality
    - Admin dashboard displays a paginated table of all polls in the system
    - The admin can sort the polls displayed on their dashboard in any order they like and the order of published polls will be reflected on the user's dashboard
    - An admin can create new polls and update existing ones
    - Once a poll is published (the current date and time is within the start_date and finish_date range), the poll is not editable
- User Functionality
    - User dashboard displays a paginated table of published polls
    - Once a user votes for a poll, the poll results are displayed showing how many users voted for each individual option
    - A user can only vote once per poll
    
## Technologies Used

- PHP/Laravel
- Bootstrap CSS
- Alpine JS
- Laravel Livewire
- MySQL DB

&nbsp;

## Application Setup

### 1. Install dependencies:

```
composer install // Laravel
npm install // Frontend
```

### 2. Create the `.env` file (can copy from `.env.example`)

### 3. Generate Laravel App Key
```
php artisan key:generate
```

### 4. Set up the DB

Update the DB credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=poll_app
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

### 5. Run Servers (Need to be running simultaneously):

```
php artisan serve // Laravel
npm run dev // Vite (frontend) asset bundle
```

## Optional

Can run simple tests that verify logic related to User and Polls using the command below:

```
php artisan test
```
