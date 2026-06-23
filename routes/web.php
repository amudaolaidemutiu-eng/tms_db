<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Home Page (Main URL)
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Services Page
Route::get('/services', function () {
    return view('services');
})->name('services');

// 3. Why TMS Page
Route::get('/why-tms', function () {
    return view('why-tms');
})->name('why-tms');

// 4. About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// 5. Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/*
| Quote Routes (Uses Controller)
*/
Route::get('/quote', [QuoteController::class, 'create'])->name('quote');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');

/*
| Admin Routes
*/
Route::get('/admin/quotes', [QuoteController::class, 'index'])->name('quotes.index');

/*
| Auth Routes (Added by Breeze - Keep this at the bottom)
*/
require __DIR__.'/auth.php';

// Add this line:
Route::get('/dashboard', function () {
    return redirect()->route('quotes.index');
})->name('dashboard');

// ... existing routes below ...

// This forces a login check before accessing the admin page
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/quotes', [QuoteController::class, 'index'])->name('quotes.index');
});