<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PersonnelleController;


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


    Route::get('/', [LoginController::class, 'show'])->name('login');

    Route::get('/accueil',[HomeController::class, 'index'])->name('accueil');
   
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('enregistrement');

    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

    Route::get('/personnelle', [PersonnelleController::class, 'show'])->name('personnelle');
    Route::get('/information/{id}',[PersonnelleController::class, 'info'])->name('info');
    Route::get('/personnelle{id}',[PersonnelleController::class, 'delete'])->name('personnelle.delete');

    Route::get('/table/{id}',[TableController::class, 'Numero'])->name('table');
    Route::post('/table',[TableController::class, 'calcule'])->name('calcule');

    Route::get('/articles',[ArticleController::class, 'show'])->name('articles.show');
    Route::get('/articles/ajoute',[ArticleController::class, 'ajoute'])->name('articles.ajoute');
    Route::post('/article',[ArticleController::class, 'insert'])->name('articles.insert');
    Route::get('/articles/{id}',[ArticleController::class, 'delete'])->name('articles.delete');

    Route::get('/commande',[CommandeController::class, 'show'])->name('commande.show');

    Route::get('/stock',[StockController::class, 'show'])->name('stock.show');

    Route::get('/register', function(){
        return view('auth.register');
    });
   

