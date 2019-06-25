<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Estagiario;

class HomeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         return view('home.index');
    }
}
