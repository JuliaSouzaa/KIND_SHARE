<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apadrinhamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sexo_padrinho',
        'estado_padrinho',
    ];
}
