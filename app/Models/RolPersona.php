<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolPersona extends Model
{
    use HasFactory;

    protected $with = [
        'persona'
    ];

    public function persona() {
        return $this->belongsTo(Persona::class);
    }
}
