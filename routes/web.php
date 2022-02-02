<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\GameResource;
use App\Game;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('guest.welcome');
})->name('home');
//guest
Route::resource('products', ProductController::class)->only(['index', 'show']);
Route::resource('posts', PostController::class)->only(['index', 'show']);
Route::get('categories/{category:slug}/posts', 'CategoryController@posts')->name('categories.posts');
Route::get('/games', function () {
    return view('guest.games.index')->name('games.index');
});

//autenticazione
Auth::routes();
//mail
Route::get('contacts', 'pageController@contacts')->name('contacts');
Route::post('contacts', 'pageController@SendContactForm')->name('contacts.send');

//admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('posts',PostController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('games',CategoryController::class);

});