<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $table = 'experiencias';
    public $timestamps = false;
    protected $fillable = [
        'id_curriculos', 'cargo', 'empresa', 'inicio', 'fim'
    ];
    protected $guarded = 'id';
}
