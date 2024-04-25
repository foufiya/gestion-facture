<?php

use App\Http\Controllers\DashboardController;
use App\Models\factures;
use App\http\Controllers\FacturesController;
use App\Http\Controllers\ProduitsController;
use Illuminate\Support\Facades\Auth;
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
Route::get('factures',[FacturesController::class,"index"]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produit',[ProduitsController::class,'index'])->name('produit');
Route::post('/prouduit/store',[ProduitsController::class,'store'])->name('produits.store');
Route::patch('/prouduit/update',[ProduitsController::class,'update'])->name('produits.update');
Route::delete('/prouduit/destroy',[ProduitsController::class,'destroy'])->name('produit.destroy');
Route::get('/ajouter_facture',[FacturesController::class,"create"])->name('ajouter_facture');
route::get('/invoice',[FacturesController::class,'create']);
route::post('/AjouterFacture',[FacturesController::class,'store'])->name('invoices.store');

