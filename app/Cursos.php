<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $table = 'cursos';
    public $timestamps = false;
    
    protected $fillable = [
        'id_curriculos', 'curso', 'empresa', 'inicio', 'termino'
    ];
    protected $guarded = 'id';

}
