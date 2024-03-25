<?php


use App\Http\Controllers\BackEnd\AdminController;

use App\Http\Controllers\ClientController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\FournisseurController;
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

Route::prefix('backend')->group(function (){ 
    Route::get('dashboard',[AdminController::class, 'dashboard']);
});

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
Route::get('/clients/{client}', ClientController::class .'@show')->name('clients.show');
// returns the form for editing a client
Route::get('/clients/{client}/edit', ClientController::class .'@edit')->name('clients.edit');
// updates a client
Route::put('/clients/{client}', ClientController::class .'@update')->name('clients.update');
// deletes a client
Route::delete('/clients/{client}', ClientController::class .'@destroy')->name('clients.destroy');
/*
// returns the home page with all factures
Route::get('/factures', FactureController::class .'@index')->name('factures.index');
// returns the form for adding a facture
Route::get('/factures/create', FactureController::class . '@create')->name('factures.create');
// adds a facture to the database
Route::post('/factures', [FactureController::class .'@store'])->name('factures.store');
// returns a page that shows a full facture
Route::get('/factures/{facture}', FactureController::class .'@show')->name('factures.show');
// returns the form for editing a facture
Route::get('/factures/{facture}/edit', FactureController::class .'@edit')->name('factures.edit');
// updates a facture
Route::put('/factures/{facture}', FactureController::class .'@update')->name('factures.update');
// deletes a facture
Route::delete('/factures/{facture}', FactureController::class .'@destroy')->name('factures.desttroy');
*/


Route::get('/factures', [FactureController::class, 'index'])->name('factures.index');
Route::get('/factures/create', [FactureController::class, 'create'])->name('factures.create');
Route::post('/factures', [FactureController::class, 'store'])->name('factures.store');
Route::get('/factures/{facture}', [FactureController::class, 'show'])->name('factures.show');
Route::get('/factures/{facture}/edit', [FactureController::class, 'edit'])->name('factures.edit');
Route::put('/factures/{facture}', [FactureController::class, 'update'])->name('factures.update');
Route::delete('/factures/{facture}', [FactureController::class, 'destroy'])->name('factures.destroy');

//this is of the depenses 
Route::get('/depenses', [DepenseController::class, 'index'])->name('depenses.index');
Route::get('/depenses/create', [DepenseController::class, 'create'])->name('depenses.create');
Route::post('/depenses', [DepenseController::class, 'store'])->name('depenses.store');
Route::get('/depenses/{depense}', [DepenseController::class, 'show'])->name('depenses.show');
Route::get('/depenses/{depense}/edit', [DepenseController::class, 'edit'])->name('depenses.edit');
Route::put('/depenses/{depense}', [DepenseController::class, 'update'])->name('depenses.update');
Route::delete('/depenses/{depense}', [DepenseController::class, 'destroy'])->name('depenses.destroy');

// returns the home page with all fournisseurs
Route::get('/fourni', FournisseurController::class .'@index')->name('fournisseurs.index');
// returns the form for adding a fournisseur
Route::get('/fournisseurs/create', FournisseurController::class . '@create')->name('fournisseurs.create');
// adds a fournisseur to the database
Route::post('/fournisseurs', [FournisseurController::class .'@store'])->name('fournisseurs.store');
// returns a page that shows a full fournisseur
Route::get('/fournisseurs/{fournisseur}', FournisseurController::class .'@show')->name('fournisseurs.show');
// returns the form for editing a fournisseur
Route::get('/fournisseurs/{fournisseur}/edit', FournisseurController::class .'@edit')->name('fournisseurs.edit');
// updates a fournisseur
Route::put('/fournisseurs/{fournisseur}', FournisseurController::class .'@update')->name('fournisseurs.update');
// deletes a fournisseur
Route::delete('/fournisseurs/{fournisseur}', FournisseurController::class .'@destroy')->name('fournisseurs.destroy');



// returns the home page with all entreprises
Route::get('/entreprises', [EntrepriseController::class .'index'])->name('entreprises.index');
// returns the form for adding a entreprise
Route::get('/entreprises/create', EntrepriseController::class . '@create')->name('entreprises.create');
// adds a entreprise to the database
Route::post('/entreprises', [EntrepriseController::class .'@store'])->name('entreprises.store');
// returns a page that shows a full entreprise
Route::get('/entreprises/{entreprise}', EntrepriseController::class .'@show')->name('entreprises.show');
// returns the form for editing a entreprise
Route::get('/entreprises/{entreprise}/edit', EntrepriseController::class .'@edit')->name('entreprises.edit');
// updates a entreprise
Route::put('/entreprises/{entreprise}', EntrepriseController::class .'@update')->name('entreprises.update');
// deletes a entreprise
Route::delete('/entreprises/{entreprise}', EntrepriseController::class .'@destroy')->name('entreprises.destroy');

