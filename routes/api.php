<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Remova a rota abaixo ou altere seu caminho para evitar conflito
// Route::middleware('auth:sanctum')->get('/users', function (Request $request) {
//     return $request->user();
// });

// Rotas da API de usuários sem middleware de autenticação
Route::get('/users', [UserController::class, 'index']);  // Lista todos os usuários
Route::get('/users/{id}', [UserController::class, 'show']);  // Mostra um usuário específico por ID
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::middleware('auth:api')->get('/protected-route', function () {
    return response()->json(['message' => 'You have accessed a protected route']);
});
Route::get('/sql', [UserController::class, 'getUser'])->middleware('sql_injection');


