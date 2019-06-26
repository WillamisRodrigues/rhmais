<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
      protected $fillable = [
         'cep','endereco','numero','bairro','complemento','cidade','estado','estagiario_id','instituicao_id','empresa_id'
    ];
    protected $table = 'endereco';
}
