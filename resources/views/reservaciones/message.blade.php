@extends('layout/template')

@section('title', 'Reservaciones')

@section('contenido')

<main>
    <div  class="container py-4">
        <h2>{{$msg}}</h2>

    <a href="{{url('reservaciones')}}" class="btn btn-secondary">Regresar</a>