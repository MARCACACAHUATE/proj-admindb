<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePracticasAlumnoRequest;
use App\Http\Requests\UpdatePracticasAlumnoRequest;
use App\Models\PracticasAlumno;

/**
* @OA\Info(
*   title="Practicas Alumno's Controller", 
*   version="1.0",
*   description="Controller para interactuar con las practicas realizadas por los alumnos."
* )
*
* @OA\Server(url="127.0.0.1:8000")
*/
class PracticasAlumnoController extends Controller
{
     /**
     * Trae la lista de practicas realizadas por el alumno
     * @OA\Get (
     *     path="/api/practica-alumno",
     *     tags={"Practicas Alumnos"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="nombres",
     *                         type="string",
     *                         example="Aderson Felix"
     *                     ),
     *                     @OA\Property(
     *                         property="apellidos",
     *                         type="string",
     *                         example="Jara Lazaro"
     *                     ),
     *                     @OA\Property(
     *                         property="created_at",
     *                         type="string",
     *                         example="2023-02-23T00:09:16.000000Z"
     *                     ),
     *                     @OA\Property(
     *                         property="updated_at",
     *                         type="string",
     *                         example="2023-02-23T12:33:45.000000Z"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index(): string
    {
        return "hola";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePracticasAlumnoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PracticasAlumno $practicasAlumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PracticasAlumno $practicasAlumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePracticasAlumnoRequest $request, PracticasAlumno $practicasAlumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PracticasAlumno $practicasAlumno)
    {
        //
    }
}
