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

// Admin routes (protected) - Remove role middleware for now
//     Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
//     Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
//     Route::get('/properties', function () {
//         return 'Property Management Coming Soon';
//     })->name('properties.index');
    
//     Route::get('/properties/create', function () {
//         return 'Add Property Form Coming Soon';
//     })->name('properties.create');
// });

// Admin routes (protected)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    // Property Management Routes
    Route::resource('properties', App\Http\Controllers\Admin\PropertyController::class);
});

Auth::routes();