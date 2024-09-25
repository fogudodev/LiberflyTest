<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SqlInjectionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o parâmetro 'id' contém tentativas de injeção
        if ($request->has('id') && preg_match('/[\'"()=]/', $request->input('id'))) {
            return response()->json(['error' => 'Invalid input'], 400);
        }

        return $next($request);
    }
}
