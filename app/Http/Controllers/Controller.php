<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *     title="API de Exemplo",
 *     version="1.0.0",
 *     description="Esta é uma API de exemplo para o teste técnico",
 *     @OA\Contact(
 *         email="seuemail@exemplo.com"
 *     )
 * )
 */

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
