<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Doacao.php
class Doacao extends Model
{
    protected $table = 'doacoes';

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'instituicao',
        'mensagem',
        'arquivo_nome',
        'arquivo'
    ];
    
}
