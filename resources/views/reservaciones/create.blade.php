@extends('layout/template')

@section('title', 'Hacer Reservación')

@section('contenido')
<main>
    <div  class="container py-4">
        <h2>Hacer Reseravación</h2>

        <form action="{{url('reservaciones')}}" method="post">
            @csrf

            <div class="mb-3 row">
                <label for="fecha_inico" class="col-sm-2 col-form-label">Día</label>
                <div class="col-sm-5">
                    <select name="fecha_inicio" id="fecha_inicio" class="form-select" required>

                        <option value="">Selecciona el día</option>
                        @foreach($practicas as $practica){
                            <option value="{{$practica->id}}">{{date('d-M-y h:i
                            ', strtotime($practica->fecha_inicio))}}</option>
                        }
                        @endforeach
                    </select>
                </div>
            </div>

            <a href="{{url('reservaciones')}}" class="btn btn-secondary">Regresar</a>
         <button type="submit" class="btn btn-success">Reservar</button>
        </form>
    </div>
</main>