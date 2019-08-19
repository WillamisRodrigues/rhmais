<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TceAditivo extends Model
{
    protected $fillable = [
       'agente_integracao', 'estagiario_id', 'empresa_id', 'instituicao_id', ' beneficio_id',
        'seguro_id', 'setor_id', 'bolsa', 'contrato', 'assinado', 'obrigatorio', 'status', 'data_inicio', 'data_fim', 'horario', 'atividade', 'orientador', 'supervisor', 'data_doc'
    ];

    protected $table = 'tce_contrato';

    public function tceAditivo()
    {
        return  $this->hasMany('App\Estagiario');
    }
}
