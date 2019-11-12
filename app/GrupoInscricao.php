<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoInscricao extends Model
{
    use SoftDeletes;
    protected $fillable = ['grupo_id', 'inscricao_id'];
    protected $primaryKey = 'id_grupo_inscricao';
    protected $table = 'grupos_incricoes';
}
