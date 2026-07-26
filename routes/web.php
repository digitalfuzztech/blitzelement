<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\ContactpageController;

//Route::view('/', 'welcome')->name('home');
Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/about', [AboutpageController::class, 'about'])->name('about');
Route::get('/contact', [ContactpageController::class, 'contact'])->name('contact');




Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
