<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

//Route::view('/', 'welcome')->name('home');
Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
