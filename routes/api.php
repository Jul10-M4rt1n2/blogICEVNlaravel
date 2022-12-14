<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//rota de mideas
Route::get('/medias', 'App\Http\Controllers\API\InstagramController@index')->name('site.mideas');
//rota watch detalhe do video
Route::get('/watch/{id}', 'App\Http\Controllers\API\InstagramController@watch')->name('site.watch');