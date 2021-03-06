<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $with = [
        'telefonos'
    ];

    public function rolPersonas() {
        return $this->hasMany(RolPersona::class);
    }

    public function telefonos() {
        return $this->hasMany(Telefono::class);
    }
}
