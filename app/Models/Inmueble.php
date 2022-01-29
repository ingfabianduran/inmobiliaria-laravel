<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    use HasFactory;

    protected $with = [
        'fotos',
        'barrio'
    ];

    protected $fillable = [
        'tipo',
        'costo',
        'numeroPisos',
        'metrosCuadrados',
        'barrio_id',
        'direccion',
        'numeroHabitaciones',
        'numeroBanios',
        'tieneSalaComedor',
        'tieneGaraje',
        'estaActivo'
    ];

    public function barrio() {
        return $this->belongsTo(Barrio::class);
    }

    public function fotos() {
        return $this->hasMany(Foto::class);
    }
}
