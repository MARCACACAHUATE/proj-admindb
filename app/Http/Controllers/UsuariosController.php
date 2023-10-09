<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('usuarios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rol = Rol::all();
        return view('usuarios.create', ['roles' => $rol]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricula' => 'required|unique:usuarios|max:8',
            'nombre' => 'required|max:150',
            'correo' => 'nullable|email',
            'password' => 'required|max:15',
            'rol' => 'required'
        ]);

        $usuario = new Usuarios();
        $usuario->matricula = $request->input('matricula');
        $usuario->nombre = $request->input('nombre');
        $usuario->correo = $request->input('correo');
        $usuario->password = $request->input('password');
        $usuario->rol_id = $request->input('rol');
        $usuario->save();

        return view("usuarios.message", ['msg' => "Registro Guadardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
