<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EgresoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/egreso', [EgresoController::class, 'index'])
->name('egreso')
->middleware(['auth', 'estudiantePermission']);

Route::get('/egreso/estudiantes', [EgresoCoordinadorController::class, 'index'])
->name('egreso/estudiantes')
->middleware(['auth', 'jefePermission','cordinadorPermission','docentePermission']);
