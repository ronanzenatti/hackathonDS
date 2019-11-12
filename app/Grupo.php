<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grupo extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome'];
    protected $primaryKey = 'id_grupo';
    protected $table = 'grupos';
}
