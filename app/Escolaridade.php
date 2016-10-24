<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    protected $table = 'escolaridades';
    public $timestamps = false;
    protected $fillable = [
        'id_curriculos', 'escolaridade', 'entidade', 'curso', 'concluido', 'anoconclusao'
    ];
    protected $guarded = 'id';
    protected $casts = [
        'visto' => 'boolean',
        'selecionado' => 'boolean',
    ];
    
    
}
