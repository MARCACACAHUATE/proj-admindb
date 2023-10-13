@extends('layout/template')

@section('title', 'Reservaciones')

@section('contenido')

<main>
    <div class= "container">
        <h2>Lista de reservaciones</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                <th>id</th>
                <th>is_valid</th>
                <th>alumno_id</th>
                <th>practica_id</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th></th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservaciones as $reservacion){
                    <tr>
                        <td>{{$reservacion->id}}</td>
                        <td>{{$reservacion->is_valid}}</td>
                        <td>{{$reservacion->alumno_id}}</td>
                        <td>{{$reservacion->practica_id}}</d>
                        <td>{{$reservacion->created_at}}</td>
                        <td>{{$reservacion->updated_at}}</td>
                        <td><a href="{{url('reservaciones/'.$reservacion->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>
                        <td>
                            <form action="{{url('reservaciones/'.$reservacion->id)}}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                }
                @endforeach
            </tbody>
        </table>

        <a href="{{url('reservaciones/create')}}" class="btn btn-primary">Hacer Reservación</a>
    </div>
</main>