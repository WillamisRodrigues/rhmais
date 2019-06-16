<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function adicionar()
    {
        return view('cadastro.empresas');
    }
}
