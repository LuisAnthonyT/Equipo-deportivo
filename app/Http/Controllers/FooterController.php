<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function politicaCookies()
    {
        return view('politicas.politica');
    }

    public function configuracionCookies()
    {
        return view('politicas.cookies');
    }

    public function politicaPrivacidad()
    {
        return view('politicas.privacidad');
    }

    public function terminosYCondiciones()
    {
        return view('politicas.terminos');
    }
}
