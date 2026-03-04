<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('/certificaciones', [HomeController::class, 'certificaciones'])->name('certificaciones');
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');

$services = Cache::remember('services', 60 * 60, function () {
    return Service::all();
});

foreach ($services as $service) {
    Route::get($service->slug, [HomeController::class, str_replace('-', '_', $service->slug)])
        ->name('servicios.' . $service->slug);
}

# Ruta de Soluciones que NO tienen asignado servicios
$solucion = Solution::doesntHave('services')->first();

if ($solucion) {
    Route::get($solucion->slug, [HomeController::class, str_replace('-', '_', $solucion->slug)])
        ->name('servicios.' . $solucion->slug);
}

# Landing pages para Google Ads (sin nav/footer, noindex)
Route::get('/l/seguridad-informatica', [LandingController::class, 'seguridadInformatica'])->name('landing.seguridad');
Route::get('/l/cableado-estructurado-y-fibra-optica', [LandingController::class, 'cableadoFibraOptica'])->name('landing.cableado');
Route::get('/l/video-vigilancia', [LandingController::class, 'videoVigilancia'])->name('landing.videovigilancia');