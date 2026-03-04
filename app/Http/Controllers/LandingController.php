<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function seguridadInformatica()
    {
        return view('landing.seguridad-informatica');
    }

    public function cableadoFibraOptica()
    {
        return view('landing.cableado-estructurado-y-fibra-optica');
    }

    public function videoVigilancia()
    {
        return view('landing.video-vigilancia');
    }
}
