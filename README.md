# Livewire Laravel

## My Environment

-   PHP 8.1.8
-   Laravel Framework 9.21.5

## Installation

1. Clone the project
2. Go to the project root directory and run `composer install` and `npm install`
3. Create `.env` file and copy content from `.env.example`
4. Run `php artisan key:generate --ansi` from terminal
5. Create database file `database/database.sqlite`
6. Run migrations by executing `php artisan migrate`
7. Start the project by running `php artisan serve`
8. Start the vite server (for serving css and js files) by running `npm run dev`

## How to fix

-   use it `sudo apt-get install php-sqlite3` if error message like this

```bash
➜ php artisan migrate

   Illuminate\Database\QueryException

  could not find driver (SQL: PRAGMA foreign_keys = ON;)
  39  artisan:37
      Illuminate\Foundation\Console\Kernel::handle()
```
