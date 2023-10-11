<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuarios extends Model
{
    use HasFactory;

    public function rol(): BelongsTo{
        return $this->belongsTo(Rol::class, 'rol_id', 'id');
    }

    public function practicasCreadas(): HasMany {
        return $this->hasMany(Practicas::class, "maestro_id");
    }

    public function practicasEntregadas(): HasMany {
        return $this->hasMany(PracticasAlumno::class, "alumno_id");
    }

    public function grupos(): BelongsToMany {
        return $this->belongsToMany(Grupo::class);
    }

    public function registroSemestre(): HasMany {
        return $this->hasMany(RegistroSemestre::class, "alumno_id");
    }
}
