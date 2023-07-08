<?php

use App\Http\Controllers\Api\PacienteController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::delete('/pacientes/{id}', [PacienteController::class, 'destroy']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::patch('/users/update/{id}', [UserController::class, 'update']);
Route::patch('/pacientes/update/{id}', [PacienteController::class, 'update']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/pacientes/{id}', [PacienteController::class, 'show']);
Route::get('/pacientes', [PacienteController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::post('/pacientes', [PacienteController::class, 'store']);
Route::post('/users', [UserController::class, 'store']);


Route::get('/', function(){
    return response()->json([
        'sucess' => true
    ]);

});