<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
//URL::forceScheme('https');

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

Auth::Routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('logout', function () {
    return view('login');
})->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, "index"]);
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// returns the home page with all posts
Route::get('/1', PostController::class .'@index')->name('posts.index');
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// adds a post to the database
Route::post('/posts', PostController::class .'@store')->name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');



// returns the home page with all clients
Route::get('/2', ClientController::class .'@index')->name('clients.index');
// returns the form for adding a client
Route::get('/clients/create', ClientController::class . '@create')->name('clients.create');
// adds a client to the database
Route::post('/clients', [ClientController::class .'@store'])->name('clients.store');
// returns a page that shows a full client
Route::get('/clients/{post}', ClientController::class .'@show')->name('clients.show');
// returns the form for editing a client
Route::get('/clients/{post}/edit', ClientController::class .'@edit')->name('clients.edit');
// updates a client
Route::put('/clients/{post}', ClientController::class .'@update')->name('clients.update');
// deletes a client
Route::delete('/clients/{post}', ClientController::class .'@destroy')->name('clients.destroy');