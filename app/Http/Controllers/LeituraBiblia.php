<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeituraBiblia extends Controller
{
    public function paginaLeitura ()
    {
    return view('MenuRetrato.LeituraBiblia');
    }
}
