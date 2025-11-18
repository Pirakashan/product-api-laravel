# Product API Laravel

Laravel REST API for Aahaas Ecommerce Application

## Requirements
- PHP >= 8.1
- Composer
- MySQL or MariaDB

---

## Installation Guide

### 1. Install Dependencies

First, ensure you have Composer installed on your system. Then, install all PHP dependencies:

```bash
composer install
```

This command will read `composer.json` and install all required packages listed in `composer.lock`.

---

### 2. Environment Configuration

Create a `.env` file from the example file:

```bash
cp .env.example .env
```

Update the database credentials in `.env` to match your database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aahaas_ecommerce
DB_USERNAME=root
DB_PASSWORD=your_password
```

Generate the application encryption key:

```bash
php artisan key:generate
```

---

### 3. Run Migrations and Seeders

#### Run All Migrations

This will create the necessary database tables:

```bash
php artisan migrate
```

**Tables created:**
- `users` - User account information
- `products` - Product catalog
- `cache` - Cache storage
- `jobs` - Job queue storage

#### Seed the Database

Populate the database with sample data:

```bash
php artisan db:seed --class=ProductSeeder
```

This will seed the `products` table with sample product data for testing.

#### Refresh Database (Reset and Seed)

To reset the database and run migrations + seeders again:

```bash
php artisan migrate:refresh --seed
```

---

### 4. Start the Laravel Development Server

Run the built-in Laravel development server:

```bash
php artisan serve
```

**Default URL:** `http://localhost:8000`

You can access your API at this URL. The server will automatically reload when you make changes to your code.

#### Optional: Specify Custom Host/Port

```bash
php artisan serve --host=0.0.0.0 --port=8080
```

---

## Project Structure

- `app/` - Application code (Models, Controllers, Providers)
- `routes/` - API and web routes (`routes/api.php` contains API endpoints)
- `database/` - Migrations and seeders
- `config/` - Application configuration files
- `resources/` - Views and assets
- `storage/` - Application storage (logs, cache)
- `tests/` - Unit and feature tests

---

## Available Artisan Commands

```bash
# Run tests
php artisan test

# Clear application cache
php artisan cache:clear

# Reset the database
php artisan migrate:reset

# View all routes
php artisan route:list

# Create a new controller
php artisan make:controller ControllerName
```

---

## Troubleshooting

**Problem:** `SQLSTATE[HY000] [2002] Connection refused`
- **Solution:** Ensure MySQL is running and credentials in `.env` are correct.

**Problem:** `Class not found` errors
- **Solution:** Run `composer dump-autoload` to regenerate the autoloader.

**Problem:** Permission denied errors on `storage/` directory
- **Solution:** Ensure the `storage/` and `bootstrap/cache/` directories are writable.

API will be available at: `http://localhost:8000/api/products`