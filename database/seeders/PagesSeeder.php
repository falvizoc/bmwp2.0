<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            'Infraestructura Física de Redes - Cableado Estructurado y Fibra Óptica',
            'Infraestructura Física de Redes - Seguridad Informática',
            'Infraestructura Física de Redes - Redes Inalámbricas',
            'Soluciones de Seguridad - Video Vigilancia',
            'Soluciones de Seguridad - Sistemas Control de Acceso',
            'Soluciones de Seguridad - Sistemas de Automatización',
            'Soluciones de Seguridad - Sistemas de Control de Incendio',
            'Soluciones Avanzadas - VoIP (Voz sobre IP)',
            'Soluciones Avanzadas - Control de Asistencia',
            'Soluciones Avanzadas - Salas de Videoconferencia',
            'Soluciones Avanzadas - Almacenamiento y Protección de Datos',
            'Soluciones de Energía - Respaldo de Suministro Eléctrico',
            'Soluciones de Energía - Protección contra Descargas Eléctricas',
            'Suministros - Equipo de Cómputo y Servidores',
            'Suministros - Licenciamiento de Software',
            'Suministros - Accesorios, Refacciones y Consumibles'
        ];

        foreach ($pages as $page) {
            Page::create([
                'name' => $page,
            ]);
        }
    }
}
