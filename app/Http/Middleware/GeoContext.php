<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GeoContext
{
    private const WHITELIST = [
        'Tampico', 'Monterrey', 'Reynosa', 'Matamoros', 'Nuevo Laredo',
        'Saltillo', 'Torreón', 'Chihuahua', 'Ciudad Juárez', 'Hermosillo',
        'Culiacán', 'Tijuana', 'Mexicali', 'Ciudad Victoria', 'San Luis Potosí',
        'Guadalupe', 'Apodaca', 'San Nicolás', 'Escobedo', 'Santa Catarina',
        'Durango', 'Mazatlán', 'Obregón', 'Los Mochis', 'Ensenada',
        'Juárez', 'Delicias', 'Parral', 'Monclova', 'Piedras Negras',
        'Laredo', 'Altamira', 'Madero', 'Mante',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $ciudad = $request->query('ciudad');

        if ($ciudad !== null) {
            $match = collect(self::WHITELIST)->first(
                fn($c) => mb_strtolower($c) === mb_strtolower(trim($ciudad))
            );

            if ($match) {
                session(['bm_geo' => $match]);
            }
        }

        return $next($request);
    }
}
