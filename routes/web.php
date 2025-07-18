<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('frontend.home.index');
})->name('home');

Route::get('/properties', [App\Http\Controllers\Frontend\PropertyController::class, 'index'])->name('properties.index');


Route::get('/agents', function () {
    return view('frontend.agents.index');
})->name('agents.index');

// Admin routes (protected)
Route::middleware(['auth', 'role:admin|agent'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');
    
    Route::get('/properties/create', function () {
        return 'Add Property Page';
    })->name('properties.create');
});

Auth::routes();