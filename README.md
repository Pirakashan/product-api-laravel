# Product API Laravel

Laravel REST API for Aahaas Ecommerce Application

## Requirements
- PHP >= 8.1
- Composer
- MySQL

## Installation

1. Clone the repository
```bash
git clone <your-repo-url>
cd product-api-laravel
```

2. Install dependencies
```bash
composer install
```

3. Configure environment
```bash
cp .env.example .env
```

4. Update database credentials in `.env`
```env
DB_DATABASE=aahaas_ecommerce
DB_USERNAME=root
DB_PASSWORD=your_password
```

5. Generate application key
```bash
php artisan key:generate
```

6. Run migrations and seeders
```bash
php artisan migrate
php artisan db:seed --class=ProductSeeder
```

7. Start the development server
```bash
php artisan serve
```

API will be available at: `http://localhost:8000/api/products`