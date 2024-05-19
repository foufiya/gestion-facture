<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EntreprisesController;
use App\Models\factures;
use App\http\Controllers\FacturesController;
use App\Http\Controllers\ProduitsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolesController;
use App\http\Controllers\InvoicesDetailsController;
use App\Http\Controllers\UserController;
use App\http\Controllers\Invoices_Report;



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

    Route::get('factures', [FacturesController::class, "index"]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/produit', [ProduitsController::class, 'index'])->name('produit');
    Route::post('/prouduit/store', [ProduitsController::class, 'store'])->name('produits.store');
    Route::patch('/prouduit/update', [ProduitsController::class, 'update'])->name('produits.update');
    Route::delete('/prouduit/destroy', [ProduitsController::class, 'destroy'])->name('produit.destroy');
    Route::get('/ajouter_facture', [FacturesController::class, "create"])->name('ajouter_facture');
    route::get('/invoice', [FacturesController::class, 'create']);
    route::post('/AjouterFacture', [FacturesController::class, 'store'])->name('invoices.store');
    route::get('/InvoicesDetails/{id}', [InvoicesDetailsController::class, 'edit'])->name('invoices.edit');
    Route::get('/status_show/{id}', [FacturesController::class, 'show'])->name('Status_show');
    Route::post('/status_Update/{id}', [FacturesController::class, 'status_Update'])->name('Status_Update');
    Route::get('/Exporter', [FacturesController::class, "File"]);

    // permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::get('permissions', [PermissionsController::class, 'index'])->name('permissions.index');
    Route::get('permissions/create', [PermissionsController::class, 'create'])->name('permissions.create');
    Route::post('permissions', [PermissionsController::class, 'store'])->name('permissions.store');
    Route::get('permissions/{permission}', [PermissionsController::class, 'show'])->name('permissions.show');
    Route::get('permissions/{permission}/edit', [PermissionsController::class, 'edit'])->name('permissions.edit');
    Route::put('permissions/{permission}', [PermissionsController::class, 'update'])->name('permissions.update');
    Route::delete('permissions/{permission}', [PermissionsController::class, 'destroy'])->name('permissions.destroy');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::get('roles', [RolesController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [RolesController::class, 'create'])->name('roles.create');
    Route::post('roles', [RolesController::class, 'store'])->name('roles.store');
    Route::get('roles/{role}', [RolesController::class, 'show'])->name('roles.show');
    Route::get('roles/{role}/edit', [RolesController::class, 'edit'])->name('roles.edit');
    Route::put('roles/{role}', [RolesController::class, 'update'])->name('roles.update');
    Route::delete('roles/{role}', [RolesController::class, 'destroy'])->name('roles.destroy');});
    //User
    Route::get('/AfficherUser',[UserController::class,'index'])->name('admin.users.index');
    Route::get('/AfficherUser2',[UserController::class,'create'])->name('admin.users.create');
    Route::post('/Store',[UserController::class,'store'])->name('admin.users.store');
    // Route::get('/showUser/{id}',[UserController::class,'show'])->name('admin.users.show');
    Route::get('/admin/users/{user}/edit', 'UserController@edit')->name('admin.users.edit');

    Route::put('/admin/users1/{user}', 'UserController@update')->name('admin.users.update');
    Route::delete('/admin/user/{id}',[UserController::class,'destroy'])->name('admin.users.destroy');
    // Route::get('/AfficherUser2',[UserController::class,'destroy'])->name('admin.users.destroy');





    /// Afichages des types de Factures
    Route::get('/indexPayee',[FacturesController::class,'indexF_paid']);
    Route::get('/facture_imapaid',[FacturesController::class,'indexF_impaid']);
    Route::get('/facture_imapaid',[FacturesController::class,'indexF_impaid']);
    Route::get('/indexPp',[FacturesController::class,'indexF_paidP']);
    // Rapport:
    Route::get('/Rapport',[Invoices_Report::class,'index']);
    Route::post('/Search_invoices',[Invoices_Report::class,'Search_invoices']);


    //CLIENTS
    route::get('/clients',[ClientsController::class,'index']);
    Route::post('/clients/store',[ClientsController::class,'store'])->name('clients.store');
    Route::patch('/clients/update',[ClientsController::class,'update'])->name('clients.update');
    Route::delete('/clients/destroy',[ClientsController::class,'destroy'])->name('clients.destroy');
    
    //ENTREPRISES
    Route::get('/entreprises', [EntreprisesController::class, 'index'])->name('entreprises.index');
    Route::post('/entreprises/store', [EntreprisesController::class, 'store'])->name('entreprises.store');
    Route::patch('/entreprises/update', [EntreprisesController::class, 'update'])->name('entreprises.update');
    Route::delete('/entreprises/destroy', [EntreprisesController::class, 'destroy'])->name('entreprises.destroy');
    
    //profile utilisateur

    /*Route::get('/profile',[UserController::class, 'edit2'])->name('users.profile') ;
    Route::put('/profile/update',[UserController::class, 'update2'])->name('users.update');
    Route::get('/profile2/{id}',[UserController::class, 'showUserProfile'])->name('users.index');
*/
//last
    /*Route::get('/profile', [UserController::class, 'showUserProfile'])->name('profile');
    Route::put('/profile', [UserController::class, 'updateProfile'])->name('users.update-profile');
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'showUserProfile'])->name('profile');
    Route::put('/profile', [UserController::class, 'updateProfile'])->name('users.update-profile');
});
