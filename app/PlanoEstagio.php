<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanoEstagio extends Model
{
    protected $fillable = ['empresa_id', 'instituicao_id','data_inicio', 'data_fim', 'contrato', 'assinado', 'plano'];
    protected $table = 'plano_estagio';
}
