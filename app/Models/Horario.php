<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $table = 'horarios';
    protected $fillable = [
        'hora_inicio',
        'hora_fin',
        'dia',
        'sala_id',
        'grupo_id'
    ];

}
