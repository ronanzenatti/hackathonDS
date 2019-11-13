<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inscricao extends Model
{
    use SoftDeletes;
    protected $fillable = ['evento_id', 'participante_id', 'grupo_id', 'data_hora'];
    protected $dates = ['data_hora'];
    protected $primaryKey = 'id_inscricao';
    protected $table = 'inscricoes';
}
