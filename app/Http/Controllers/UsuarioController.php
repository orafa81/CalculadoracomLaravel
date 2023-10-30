<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function mostrar($id) {
        return "O seu ID é: $id";
    }
    public function chamar() {
        return view('contact');
    }

}
