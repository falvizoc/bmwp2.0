<?php

namespace Database\Seeders;

use App\Models\FrecuentQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrecuentQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'title' => '¿Bitmovil personaliza las soluciones según las necesidades de mi empresa?',
                'description' => 'Sí, en Bitmovil nos especializamos en personalizar nuestras soluciones tecnológicas para adaptarlas específicamente a las necesidades y requisitos únicos de cada empresa. Este enfoque personalizado asegura que cada aspecto de la solución, desde el hardware y el software hasta la configuración y el soporte, se alinea perfectamente con los objetivos operativos y estratégicos de tu negocio. Al colaborar estrechamente contigo durante el proceso de consulta y diseño, garantizamos que la solución final no solo cumpla sino que supere tus expectativas, maximizando así la eficiencia y la efectividad de tus operaciones tecnológicas.'
            ],
            [
                'title' => '¿Ofrece Bitmovil servicios de instalación o solo la entrega de equipos tecnológicos?',
                'description' => 'Bitmovil ofrece mucho más que solo la entrega de equipos tecnológicos. Proporcionamos un servicio completo que incluye la instalación y la configuración de los equipos, asegurando que funcione de manera óptima. Nuestro equipo técnico especializado realiza todas las fases del proceso de instalación, desde el desembalaje y la configuración física hasta la integración de software y la puesta en marcha del sistema. Además, ofrecemos pólizas de soporte continuo para garantizar que tu equipo aproveche al máximo las nuevas tecnologías implementadas.'
            ],
            [
                'title' => '¿Cómo puedo obtener una cotización para un proyecto?',
                'description' => 'Para obtener una cotización para tu proyecto con nosotros, puedes contactarnos de las siguientes maneras: WhatsApp: Envía un mensaje rápido a través del número disponible en nuestro sitio web para una comunicación directa y ágil. Llamada: Marca al 83 3227 2527 para discutir tus necesidades con nuestro equipo de ventas o de ingeniería. Correo: Envía tus requisitos detallados a [email protected], especialmente útil para enviar documentación de apoyo. Nuestro equipo está preparado para asistirte en cualquiera de estos canales, asegurando una respuesta efectiva y personalizada a tus necesidades.'
            ],
            [
                'title' => '¿Las visitas técnicas de reconocimiento tendrán algún costo para mi empresa?',
                'description' => 'Las visitas técnicas de reconocimiento no tienen ningún costo dentro de la Zona Conurbada de Tampico. Para ubicaciones fuera de esta área, en el resto de la República Mexicana, aplicamos una tarifa de traslado. Sin embargo, esta tarifa se bonificará al momento de contratar nuestros servicios, asegurando que sólo inviertes en las soluciones que proporcionamos.'
            ],
            [
                'title' => '¿Bitmovil ofrece garantías por los servicios y soluciones proporcionadas?',
                'description' => 'Sí, en Bitmovil todos nuestros proyectos incluyen garantías que cubren aspectos específicos de rendimiento y fiabilidad. Además, la garantía puede ser complementada con un contrato de póliza de mantenimiento preventivo y correctivo. Este contrato no solo asegura o extiende la vida útil de la solución, sino que también ofrece beneficios como respuesta rápida a incidencias, reducción de costos operativos a largo plazo y minimización de tiempos de inactividad. Estas pólizas están diseñadas para proporcionar tranquilidad y asegurar que tus sistemas funcionen de manera eficiente y continua.'
            ],
            [
                'title' => '¿Hay financiamiento disponible para el proyecto tecnológico de mi empresa?',
                'description' => 'Sí, ofrecemos opciones de financiamiento para tu proyecto tecnológico. Contamos con dos planes de leasing en colaboración con las principales financieras de México, diseñados para facilitar la adquisición de tecnología para proyectos que superen los 10 mil USD. Esto te permite implementar soluciones avanzadas sin la necesidad de una inversión inicial importante, liberando recursos que puedes destinar al core business de tu empresa, optimizando así tu capital en áreas esenciales para el crecimiento y la innovación.'
            ],
            [
                'title' => '¿Puedo escalar las soluciones conforme crece mi negocio?',
                'description' => 'Sí, en Bitmovil, diseñamos nuestras soluciones de TI para ser escalables, permitiendo ajustarlas en la medida que tu negocio crece y cambia. Esto significa que podemos aumentar la capacidad de tus sistemas, agregar más usuarios, incrementar funcionalidades o integrar nuevas tecnologías sin interrumpir las operaciones existentes.'
            ],
            [
                'title' => '¿Cuánto tiempo lleva implementar una solución completa de TI?',
                'description' => 'El tiempo necesario para implementar una solución completa de TI varía según la complejidad y el alcance del proyecto. Una implementación básica puede completarse en un plazo de 4 a 8 semanas. Sin embargo, para proyectos más complejos o personalizados, la implementación podría extenderse. En Bitmovil, trabajamos estrechamente con nuestros clientes para establecer un cronograma detallado basado en una evaluación precisa de sus necesidades y los requisitos del proyecto. Esto nos permite planificar y garantizar que todos los componentes del sistema estén operativos dentro del tiempo acordado.'
            ],
            [
                'title' => '¿Cómo asegura Bitmovil la calidad de sus proyectos?',
                'description' => 'Bitmovil sigue rigurosos estándares de calidad en todos sus proyectos. Implementamos metodologías de gestión de proyectos reconocidas y contamos con certificaciones actualizadas para garantizar que cada solución cumpla con las expectativas. Además, realizamos pruebas exhaustivas antes de la entrega final para asegurar la funcionalidad y el rendimiento óptimo de las soluciones implementadas.'
            ],
            [
                'title' => '¿Cómo maneja Bitmovil las actualizaciones o necesidades futuras de expansión de los sistemas?',
                'description' => 'Bitmovil diseña todas sus soluciones con la escalabilidad en mente. Esto significa que estamos preparados para actualizar o expandir los sistemas según las necesidades de crecimiento de tu negocio. Ofrecemos consultas periódicas post-implementación y evaluamos la infraestructura existente para asegurar que continúe cumpliendo con tus requerimientos operativos y estratégicos a medida que tu empresa evoluciona.'
            ]
        ];

        foreach ($questions as $question) {
            FrecuentQuestion::create($question);
        }
    }
}
