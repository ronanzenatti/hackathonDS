<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome', 'descricao', 'inicio', 'termino'];
    protected $dates = ['inicio', 'termino'];
    protected $primaryKey = 'id_evento';
    protected $table = 'eventos';
}
