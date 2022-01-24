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

    public function barrio() {
        return $this->belongsTo(Barrio::class);
    }

    public function fotos() {
        return $this->hasMany(Foto::class);
    }
}
