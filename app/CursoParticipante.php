<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CursoParticipante extends Model
{
    use SoftDeletes;
    protected $fillable = ['curso_id', 'participante_id', 'grau_serie'];
    protected $primaryKey = 'id_curso_participante';
    protected $table = 'cursos_participantes';
}
