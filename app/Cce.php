<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cce extends Model
{
    protected $fillable = ['instituicao_id', 'data_inicio', 'data_fim', 'situacao', 'city','agente_integracao',
    'data_doc','seguro_id','obs'];

    protected $table = 'cce';
}
