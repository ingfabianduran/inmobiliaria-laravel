<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frase extends Model
{
    use HasFactory;

    protected $with = [
        'comentarios',
        'notas'
    ];

    public function personaje() {
        return $this->belongsTo(Personaje::class);
    }

    public function comentarios() {
        return $this->hasMany(Comentario::class);
    }

    public function notas() {
        return $this->hasMany(Nota::class);
    }
}
