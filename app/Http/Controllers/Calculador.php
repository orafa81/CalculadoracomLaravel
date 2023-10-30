<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculador extends Controller
{
    public function calcular(Request $request) {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $soma = $num1 + $num2;
        $sub = $num1 - $num2;
        $mult = $num1 * $num2;
        $div = 0;
        if ($num2 > 0) {
            $div = $num1 / $num2;
        } else {
            echo "Numero igual a zero impossivel dividir";
        }
        
        return view('resultado', compact('soma', 'sub', 'mult', 'div'));
    }
}
