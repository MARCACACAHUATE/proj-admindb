<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GruposController extends Controller
{

        public function index()
        {
            $grupos = Grupo::all();
            return view('grupos.index');
        }
    
        public function create()
        {
            return view('grupos.create');
        }
    

    
}
