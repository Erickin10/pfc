<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\GaleriaController;
use App\Http\Controllers\Site\PostarPerdidoController;
use App\Http\Controllers\Site\PostarAchadoController;


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

Route::namespace('Site')->group(function (){

    Route::get('galeria', [GaleriaController::class, 'index']) -> name('site.galeria');
    Route::get('galeria/achado/{post}', [GaleriaController::class, 'achado']) -> name ('site.galeria.achado.post-individual');
    Route::get('galeria/perdido/{post}', [GaleriaController::class, 'perdido']) -> name ('site.galeria.perdido.post-individual');

    Route::view('post-feito', 'site.post-feito') -> name('site.post-feito');
    Route::view('cadastro-feito', 'site.cadastro-feito') -> name('site.cadastro-feito');

    Route::get('postar-achado', [PostarAchadoController::class, 'index']) -> name('site.postar-achado');
    Route::post('postar-achado/store', [PostarAchadoController::class, 'formAchado']) -> name('site.postar-achado.form');

    Route::get('postar-perdido', [PostarPerdidoController::class, 'index']) -> name('site.postar-perdido');
    Route::post('postar-perdido/store', [PostarPerdidoController::class, 'formPerdido']) -> name('site.postar-perdido.form');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('site.home');
