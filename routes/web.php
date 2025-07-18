<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Http\Controllers\Menu;




Route::get('/',[Index::class, 'olaMundo']);
Route::get('/palavra-do-pastor',[Menu::class, 'palavraDoPastor'])->name('palavradopastor');
Route::get('/eventos', [Menu::class, 'eventos'])->name('eventos');