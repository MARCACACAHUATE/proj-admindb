<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

    protected $table = 'reservaciones';
    
    public function alumno(){
        return $this->belongsTo(Alumno::class, 'alumno_id', 'id');
    }

    public function practica(){
        return $this->belongsTo(Practica::class, 'practica_id', 'id');
    }
}

