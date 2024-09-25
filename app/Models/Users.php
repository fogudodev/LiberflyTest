<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="User",
 *     type="object",
 *     title="Usuário",
 *     description="Modelo que representa um usuário",
 *     @OA\Property(property="id", type="integer", description="ID do usuário"),
 *     @OA\Property(property="name", type="string", description="Nome do usuário"),
 *     @OA\Property(property="email", type="string", description="Email do usuário"),
 *     @OA\Property(property="age", type="integer", description="Idade do usuário")
 * )
 */
class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'age'];
}