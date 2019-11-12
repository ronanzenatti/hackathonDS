<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projeto extends Model
{
    use SoftDeletes;
    protected $fillable = ['grupo_id', 'nome', 'classificacao'];
    protected $primaryKey = 'id_projeto';
    protected $table = 'projetos';
}
