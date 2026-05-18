<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ClienteController;
use App\Http\Controllers\API\DispositivoController;
use App\Http\Controllers\API\ReparacionController;
use App\Http\Controllers\API\UsuarioController;
use App\Http\Controllers\API\TecnicoController;
use App\Http\Controllers\API\AdministradorController;

Route::apiResource('tecnicos', TecnicoController::class);
Route::apiResource('administradores', AdministradorController::class);
Route::apiResource('clientes', ClienteController::class);
Route::apiResource('dispositivos', DispositivoController::class);
Route::apiResource('reparaciones', ReparacionController::class);
Route::apiResource('usuarios', UsuarioController::class);
