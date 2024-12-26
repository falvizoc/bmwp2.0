<?php

use App\Http\Controllers\HomeController;
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

# Cacheo las rutas para optimizar la entrega

// Evitar cargar rutas dinámicas durante comandos Artisan
if (!app()->runningInConsole()) {
    # Cacheo las rutas para optimizar la entrega
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
}