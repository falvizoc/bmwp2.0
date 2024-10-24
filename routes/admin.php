<?php

use App\Http\Controllers\Admin\FrecuentQuestionController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SolutionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('admin.dashboard'); 
})->name('dashboard');

# Rutas Admin
Route::resource('users', UserController::class)->names('users');

# Roles
Route::resource('roles', RoleController::class)->names('roles');
Route::resource('permisos', PermissionController::class)->names('permisos');

Route::resource('preguntas-frecuentes', FrecuentQuestionController::class)->names('frecuent.questions');
Route::resource('solutions', SolutionController::class)->names('solutions');
Route::resource('services', ServiceController::class)->names('services');
Route::resource('pages', PageController::class)->names('pages');
Route::resource('reviews', ReviewController::class);