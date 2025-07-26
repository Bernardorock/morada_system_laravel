<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuRetratoController extends Controller
{
    public function lerEscrituras ()
    {
        return(view('MenuRetrato.lerAsEscrituras'));
    }
    public function adoracao ()
    {
        return(view('MenuRetrato.adoracao'));
    }
}
