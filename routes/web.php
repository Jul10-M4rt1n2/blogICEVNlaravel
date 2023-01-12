<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Painel\BookController;
use App\Http\Controllers\Painel\ContactController;
use App\Http\Controllers\Painel\HomeController;
use App\Http\Controllers\painel\OfferingsController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\Painel\StudiesController;
use App\Http\Controllers\Painel\TimelineController;
use App\Http\Controllers\Painel\WhoweareController;
use App\Http\Controllers\Painel\YoungController;
use App\Http\Controllers\Site\BookSiteController;
use App\Http\Controllers\Site\HomeSiteController;
use App\Http\Controllers\Site\OfferingsSiteController;
use App\Http\Controllers\Site\StudiesSiteController;
use App\Http\Controllers\Site\TimelineSiteController;
use App\Http\Controllers\Site\whoweareSiteController;
use App\Http\Controllers\Site\YoungSiteController;

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
    Route::get('/livros-e-revistas/{id}', [BookSiteController::class, 'show'])->name('books.show');
    //Rotas da pagina de cronograma timeline
    Route::get('/cronograma', [TimelineSiteController::class, 'index'])->name('site.timeline');
    //Rotas da pagina livros e revistas
    Route::get('/estudos-biblicos', [StudiesSiteController::class, 'index'])->name('site.studies');
    Route::get('/estudos-biblicos/{id}', [StudiesSiteController::class, 'show'])->name('studies.show');
    //rota chamando a view quem somos
    Route::get('/quem-somos', [whoweareSiteController::class, 'index'])->name('site.whoweare');
    //rota chamando a view contact
    Route::get('/contato', function () {
        return view('site.contact.index');
    })->name('site.contact');
    //rota para a pagina encontro de jovens
    Route::get('/encontro-de-jovens', [YoungSiteController::class, 'index'])->name('site.young');
    //rota para a pagina dizimos e ofertas
    Route::get('/dizimos-e-ofertas', [OfferingsSiteController::class, 'index'])->name('site.offers');
});

//rota de login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//rotas do painel dashboard
Route::group(
    ['namespace' => 'Dashboard', 'prefix' => 'sistema'],
    function () {
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
        //Rotas da pagina de cronograma timeline
        Route::get('/cronograma', [TimelineController::class, 'index'])->name('painel.timeline');
        Route::get('/cronograma/cadastrar', [TimelineController::class, 'create'])->name('painel-timeline-create');
        Route::post('/cronograma/store', [TimelineController::class, 'store'])->name('painel-timeline-store');
        Route::get('/cronograma/editar/{id}', [TimelineController::class, 'edit'])->name('painel-timeline-edit');
        Route::put('/cronograma/update/{id}', [TimelineController::class, 'update'])->name('painel-timeline-update');
        Route::delete('/cronograma/destroy/{id}', [TimelineController::class, 'destroy'])->name('painel-timeline-destroy');
        //Rotas da pagina livros e revistas
        Route::get('/estudos-biblicos', [StudiesController::class, 'index'])->name('painel.studies');
        Route::get('/estudos-biblicos/cadastrar', [StudiesController::class, 'create'])->name('painel-studies-create');
        Route::post('/estudos-biblicos/store', [StudiesController::class, 'store'])->name('painel-studies-store');
        Route::get('/estudos-biblicos/editar/{id}', [StudiesController::class, 'edit'])->name('painel-studies-edit');
        Route::put('/estudos-biblicos/update/{id}', [StudiesController::class, 'update'])->name('painel-studies-update');
        Route::delete('/estudos-biblicos/destroy/{id}', [StudiesController::class, 'destroy'])->name('painel-studies-destroy');
        //Rotas da pagina quem somos
        Route::get('/quem-somos', [WhoweareController::class, 'index'])->name('painel.whoweare');
        Route::get('/quem-somos/cadastrar', [whoweareController::class, 'create'])->name('painel-whoweare-create');
        Route::post('/quem-somos/store', [whoweareController::class, 'store'])->name('painel-whoweare-store');
        Route::get('/quem-somos/editar/{id}', [whoweareController::class, 'edit'])->name('painel-whoweare-edit');
        Route::put('/quem-somos/update/{id}', [whoweareController::class, 'update'])->name('painel-whoweare-update');
        Route::delete('/quem-somos/destroy/{id}', [whoweareController::class, 'destroy'])->name('painel-whoweare-destroy');
        //Rotas da pagina contato
        Route::get('/contato', [ContactController::class, 'index'])->name('painel.contact');
        Route::post('/send-mail', [ContactController::class, 'store'])->name('painel-send-mail');
        Route::get('/contato/enviar-lista-email', [ContactController::class, 'show'])->name('painel-contact-show');
        Route::post('/contato/enviar-lista-email', [ContactController::class, 'sendEmailAll'])->name('painel-contact-send');
        //Rotas da pagina encontro de jovens
        Route::get('/encontro-de-jovens', [YoungController::class, 'index'])->name('painel.young');
        Route::get('/encontro-de-jovens/cadastrar', [YoungController::class, 'create'])->name('painel-young-create');
        Route::post('/encontro-de-jovens/store', [YoungController::class, 'store'])->name('painel-young-store');
        Route::get('/encontro-de-jovens/editar/{id}', [YoungController::class, 'edit'])->name('painel-young-edit');
        Route::put('/encontro-de-jovens/update/{id}', [YoungController::class, 'update'])->name('painel-young-update');
        Route::delete('/encontro-de-jovens/destroy/{id}', [YoungController::class, 'destroy'])->name('painel-young-destroy');
        //Rotas da pagina dizimos e ofertas
        Route::get('/dizimos-e-ofertas', [OfferingsController::class, 'index'])->name('painel.offerings');
        Route::get('/dizimos-e-ofertas/cadastrar', [OfferingsController::class, 'create'])->name('painel-offerings-create');
        Route::post('/dizimos-e-ofertas/store', [OfferingsController::class, 'store'])->name('painel-offerings-store');
        Route::get('/dizimos-e-ofertas/editar/{id}', [OfferingsController::class, 'edit'])->name('painel-offerings-edit');
        Route::put('/dizimos-e-ofertas/update/{id}', [OfferingsController::class, 'update'])->name('painel-offerings-update');
        Route::delete('/dizimos-e-ofertas/destroy/{id}', [OfferingsController::class, 'destroy'])->name('painel-offerings-destroy');
    }
);