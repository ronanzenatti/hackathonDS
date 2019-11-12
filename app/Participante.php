<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participante extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nome', 'nome_social', 'cpf', 'rg', 'data_nascimento', 'sexo', 'celular', 'email', 'senha'
    ];
    protected $dates = ['data_nascimento'];
    protected $primaryKey = 'id_participante';
    protected $table = 'participantes';
    protected $hidden = ['senha'];
}
