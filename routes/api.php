<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Test route
Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

// Products route
Route::get('/products', function () {
    $products = \App\Models\Product::all();
    return response()->json($products);
});