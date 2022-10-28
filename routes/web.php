<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\painel\BookController;
use App\Http\Controllers\Painel\HomeController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\site\BookSiteController;
use App\Http\Controllers\Site\HomeSiteController;
use App\Http\Controllers\site\TimelineSiteController;

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
//grupo de rotas do site
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', [HomeSiteController::class, 'index'])->name('site.home');
    Route::get('/detalhes-do-post-1', [HomeSiteController::class, 'detalhesPost'])->name('site.detalhesPost');
    Route::get('/detalhes-do-post-2', [HomeSiteController::class, 'detalhesPost2'])->name('site.detalhesPost2');
    Route::get('/detalhes-do-post-3', [HomeSiteController::class, 'detalhesPost3'])->name('site.detalhesPost3');
    Route::get('detalhes-do-post-4', [HomeSiteController::class, 'detalhesPost4'])->name('site.detalhesPost4');
    //Rotas da pagina livros e revistas
    Route::get('/livros-e-revistas', [BookSiteController::class, 'index'])->name('site.books');
    Route::get('/livros-e-revistas/{id}', [BookSiteController::class, 'show'])->name('site.show');
    //Rotas da pagina de cronograma timeline
    Route::get('/cronograma', [TimelineSiteController::class, 'index'])->name('site.timeline');
});

//rota de login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//rotas do painel dashboard
Route::group(['namespace' => 'Dashboard', 'prefix' => 'sistema'],function () 
    {
        Route::get('/painel', [PainelController::class, 'index'])->name('painel');
        Route::get('/home', [HomeController::class, 'index'])->name('painel-home');
        Route::get('/home/cadastrar', [HomeController::class, 'create'])->name('painel-home-create');
        Route::post('/home/store', [HomeController::class, 'store'])->name('painel-home-store');
        Route::get('/home/editar/{id}', [HomeController::class, 'edit'])->name('painel-home-edit');
        Route::put('/home/update/{id}', [HomeController::class, 'update'])->name('painel-home-update');
        Route::delete('/home/destroy/{id}', [HomeController::class, 'destroy'])->name('painel-home-destroy');
        //Rotas da pagina livros e revistas
        Route::get('/livros-e-revistas', [BookController::class, 'index'])->name('painel.books');
        Route::get('/livros-e-revistas/cadastrar', [BookController::class, 'create'])->name('painel-books-create');
        Route::post('/livros-e-revistas/store', [BookController::class, 'store'])->name('painel-books-store');
        Route::get('/livros-e-revistas/editar/{id}', [BookController::class, 'edit'])->name('painel-books-edit');
        Route::put('/livros-e-revistas/update/{id}', [BookController::class, 'update'])->name('painel-books-update');
        Route::delete('/livros-e-revistas/destroy/{id}', [BookController::class, 'destroy'])->name('painel-books-destroy');
    }
);
//criar tabela category que vai se a tabela people e a tabela date_hors php artisan make:model Category -m
//criar a tabela timeline que pegar as tabelas category, people e date_hors php artisan make:model Timeline -m