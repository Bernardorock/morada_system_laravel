<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Menu extends Controller
{
    public function palavraDoPastor()
    {
        return view('Menu.palavraDoPastor');
    }
    public function eventos()
    {
        return view('Menu.eventos');
    }
}
