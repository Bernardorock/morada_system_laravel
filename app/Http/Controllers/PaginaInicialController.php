<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaginaInicialController extends Controller
{
    public function paginaInicial ()
    {
        return view('inicial');
    }
}
