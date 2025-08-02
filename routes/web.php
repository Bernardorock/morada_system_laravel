<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Http\Controllers\LeituraBiblia;
use App\Http\Controllers\Menu;
use App\Http\Controllers\MenuRetratoController;
use App\Http\Controllers\PaginaInicialController;

//Página login (index)
Route::get('/',[Index::class, 'olaMundo'])->name('index');

//pagina inicial atenção Bernardo - precisa mexer depois aqui isso é momentaneo
Route::get('/pagina-inicial',[PaginaInicialController::class, ('paginaInicial')])->name('paginainicial');

//Menu principal
Route::get('/palavra-do-pastor',[Menu::class, 'palavraDoPastor'])->name('palavradopastor');
Route::get('/eventos', [Menu::class, 'eventos'])->name('eventos');

//Menu Retrato
Route::get('/ler-as-escrituras',[MenuRetratoController::class, ('lerEscrituras')])->name('lerestcrituras');
Route::get('adoracao',[MenuRetratoController::class, 'adoracao'])->name('adoracao');
Route::get('/leitura-biblia', [LeituraBiblia::class, ('paginaLeitura')])->name('leiturabiblia');

//mostrar livro
Route::POST('/ver-livro',[LeituraBiblia::class, ('escolhaLivro')])->name('lerlivro');

