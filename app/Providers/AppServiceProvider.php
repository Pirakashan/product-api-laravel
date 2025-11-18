<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Register API routes manually if not auto-loaded
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }
}