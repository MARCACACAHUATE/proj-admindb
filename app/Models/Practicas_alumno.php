<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practicas_alumno extends Model
{
    use HasFactory;
    
    public function reservacion(){
        return $this->belongsTo(Reservacion::class, 'alumno_id', 'alumno_id');
    }

    public function reservaciones(){
        return $this->belongsTo(Reservacion::class, 'practica_id', 'practica_id');
    }
}
