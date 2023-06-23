<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('catalogue');
    } else {
        return view('welcome');
    }
});

// Registration routes
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

// Login routes
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');

Auth::routes();

Route::get('/home', ['App\Http\Controllers\HomeController@index'])->name('home');

// Route::get('/catalogue', 'App\Http\Controllers\CatalogueController@index')->name('catalogue');
// Route::get('/favourites', 'App\Http\Controllers\FavouritesController@index')->name('favourites');


// Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue');
Route::post('/catalogue/{browser}/addToFavorites', 'App\Http\Controllers\CatalogueController@addToFavorites')->name('catalogue.addToFavorites');
Route::delete('/favorites/{browser}/removeFromFavorites', 'App\Http\Controllers\FavoritesController@removeFromFavorites')->name('favorites.removeFromFavorites');

Route::get('/browser/{id}', 'App\Http\Controllers\BrowserController@show')->name('browser');

// Route::post('/catalogue/{browser}/addToFavorites', [CatalogueController::class, 'addToFavorites'])->name('catalogue.addToFavorites');

Route::middleware(['redirectIfNotAuthenticated'])->group(function () {
    // Protected routes go here
    Route::get('/catalogue', 'App\Http\Controllers\CatalogueController@index')->name('catalogue');
    Route::get('/favorites', 'App\Http\Controllers\FavoritesController@favorites')->name('favorites');
});
