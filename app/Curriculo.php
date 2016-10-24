<?php

namespace App;

use App\Helper\DataHora;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curriculo extends Model
{
    use SoftDeletes;
    protected $table = 'curriculos';
    protected $fillable = [
        'cpf', 'nome', 'nascimento', 'cep', 'logradouro', 'cidade', 'telefone', 'celular', 'email', 'foto', 'deficiente', 'viajar', 'anexo', 'visto', 'selecionado'
    ];
    protected $guarded = 'id';
    protected $dates = ['create_at', 'update_at', 'delete_at'];

    public function dataNascimento()
    {
        $data = new DataHora($this->nascimento);
        return $data->dataCompleta();
    }

}
