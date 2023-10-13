<?php

namespace App\Http\Controllers;

use App\Models\Reservacion;
use App\Models\Practica;
use Illuminate\Http\Request;

class ReservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservaciones = Reservacion::all();
        return view('reservaciones.index', ['reservaciones' => $reservaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $practicas = Practica::where('estado', 1)->get();
        return view('reservaciones.create', ['practicas' => $practicas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'fecha_inicio' => 'required' 
        ]);

        $reservacion = new Reservacion();
        $reservacion->practica_id = $request->input('fecha_inicio');
        $reservacion->save(); 

        return view("reservaciones.message", ['msg' => "Reservacion hecha"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservacion $reservacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reservacion = Reservacion::find($id);
        $practicas = Practica::where('estado', 1)->get();
        return view('reservaciones.edit', ['reservacion' => $reservacion,'practica' => Practica::find($reservacion->practica_id), 'practicas' => $practicas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha_inicio' => 'required' 
        ]);

        $reservacion = Reservacion::find($id);
        $reservacion->practica_id = $request->input('fecha_inicio');
        $reservacion->save(); 

        return view("reservaciones.message", ['msg' => "Reservacion modificada"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservacion = Reservacion::find($id);
        $reservacion->delete();

        return redirect("reservaciones");
    }
}
