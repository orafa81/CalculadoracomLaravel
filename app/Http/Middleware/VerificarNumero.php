<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VerificarNumero
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $num1 = $request -> input('num1');
        $num2 = $request -> input('num2');
        if ($num1 < 0 or $num2 < 0) {
            Session::flash('mensagem', 'Os números não podem ser negativos.');
            return redirect('/calcular?mensagem=Os números não podem ser negativos');
        }
        return $next($request);
    }
}
