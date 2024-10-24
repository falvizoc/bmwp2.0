<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Solution;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SolutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $solutions = [
            [
                'name' => 'Infraestructura Física de Redes',
                'icon' => 'git-network-outline',
                'sort' => 1,
                'services' => [
                    ['name' => 'Cableado Estructurado y Fibra Óptica', 'icon' => 'git-network', 'description' => 'Conexiones sólidas, velocidad superior.'],
                    ['name' => 'Seguridad Informática', 'icon' => 'shield-checkmark', 'description' => 'Protección integral de la infraestructura digital.'],
                    ['name' => 'Redes Inalámbricas', 'icon' => 'wifi', 'description' => 'Conectividad sin cables, máxima movilidad.'],
                ]
            ],
            [
                'name' => 'Soluciones de Seguridad',
                'icon' => 'lock-closed-outline',
                'sort' => 2,
                'services' => [
                    ['name' => 'Video Vigilancia', 'icon' => 'videocam', 'description' => 'Monitoreo continuo, seguridad garantizada.'],
                    ['name' => 'Sistemas Control de Acceso', 'icon' => 'log-in', 'description' => 'Control de entrada y salida, acceso restringido.'],
                    ['name' => 'Sistemas de Automatización', 'icon' => 'settings', 'description' => 'Automatización avanzada para mayor eficiencia.'],
                    ['name' => 'Sistemas de Control de Incendio', 'icon' => 'flame', 'description' => 'Detección y supresión de incendios efectiva.'],
                ]
            ],
            [
                'name' => 'Soluciones Avanzadas',
                'icon' => 'medal-outline',
                'sort' => 3,
                'services' => [
                    ['name' => 'VoIP (Voz sobre IP)', 'icon' => 'call', 'description' => 'Comunicación eficiente a través de Internet.'],
                    ['name' => 'Control de Asistencia', 'icon' => 'finger-print', 'description' => 'Registro preciso de asistencia y tiempos.'],
                    ['name' => 'Salas de Videoconferencia', 'icon' => 'videocam', 'description' => 'Reuniones virtuales de alta calidad.'],
                    ['name' => 'Almacenamiento y Protección de Datos', 'icon' => 'cloud-outline', 'description' => 'Seguridad y almacenamiento en la nube.'],
                ]
            ],
            [
                'name' => 'Soluciones de Energía',
                'icon' => 'flash-outline',
                'sort' => 4,
                'services' => [
                    ['name' => 'Respaldo de Suministro Eléctrico', 'icon' => 'battery-full', 'description' => 'Continuidad operativa garantizada.'],
                    ['name' => 'Protección contra Descargas Eléctricas', 'icon' => 'flash', 'description' => 'Equipos protegidos, operación segura.'],
                ]
            ],
            [
                'name' => 'Suministros',
                'icon' => 'build-outline',
                'sort' => 5,
                'services' => [
                    ['name' => 'Equipo de Cómputo y Servidores', 'icon' => 'desktop', 'description' => 'Tecnología de vanguardia para empresas.'],
                    ['name' => 'Licenciamiento de Software', 'icon' => 'key', 'description' => 'Software legal y actualizado.'],
                    ['name' => 'Accesorios, Refacciones y Consumibles', 'icon' => 'construct', 'description' => 'Componentes esenciales para tus equipos.'],
                ]
            ],
            [
                'name' => 'Servicio Técnico',
                'icon' => 'build-outline',
                'sort' => 6,
                'services' => []
            ],
        ];

        foreach ($solutions as $solutionData) {
            $solution = Solution::create([
                'name' => $solutionData['name'],
                'icon' => $solutionData['icon'],
                'sort' => $solutionData['sort'],
                'slug' => Str::slug($solutionData['name']),
            ]);

            foreach ($solutionData['services'] as $serviceData) {
                Service::create([
                    'solution_id' => $solution->id,
                    'name' => $serviceData['name'],
                    'description' => $serviceData['description'],
                    'icon' => $serviceData['icon'],
                    'slug' => Str::slug($serviceData['name']),
                ]);
            }
        }
    }
}
