<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function cableado_estructurado_y_fibra_optica()
    {
        return view('home.cableado-estructurado-y-fibra-optica');
    }

    public function seguridad_informatica()
    {
        return view('home.seguridad-informatica');
    }

    public function redes_inalambricas()
    {
        return view('home.redes-inalambricas');
    }
    
    public function video_vigilancia()
    {
        return view('home.video-vigilancia');
    }

    public function sistemas_de_automatizacion()
    {
        return view('home.sistemas-de-automatizacion');
    }
     
    public function sistemas_control_de_acceso()
    {
        return view('home.sistemas-control-de-acceso');
    }
         
    public function sistemas_de_control_de_incendio()
    {
        return view('home.sistemas-de-control-de-incendio');
    }

    public function voip_voz_sobre_ip()
    {
        return view('home.voip-voz-sobre-ip');
    }
    
    public function almacenamiento_y_proteccion_de_datos()
    {
        return view('home.almacenamiento-y-proteccion-de-datos');
    }
     
     
    public function respaldo_de_suministro_electrico()
    {
        return view('home.respaldo-de-suministro-electrico');
    }

    public function salas_de_videoconferencia()
    {
        return view('home.salas-de-videoconferencia');
    }

    public function proteccion_contra_descargas_electricas()
    {
        return view('home.proteccion-contra-descargas-electricas');
    }
    
    public function control_de_asistencia()
    {
        return view('home.control-de-asistencia');
    }
    
    public function equipo_de_computo_y_servidores()
    {
        return view('home.equipo-de-computo-y-servidores');
    }

    public function licenciamiento_de_software()
    {
        return view('home.licenciamiento-de-software');
    }

    public function accesorios_refacciones_y_consumibles ()
    {
        return view('home.accesorios-refacciones-y-consumibles');
    }

    public function servicio_tecnico()
    {
        return view('home.servicio-tecnico');
    }
    
}
