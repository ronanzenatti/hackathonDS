<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome', 'grau_instrucao'];
    protected $primaryKey = 'id_curso';
    protected $table = 'cursos';

}
