<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
      protected $fillable = [
         'cep','rua','numero','bairro','complemento','estagiario_id','instituicao_id','empresa_id'
    ];
    protected $table = 'endereco';
}
