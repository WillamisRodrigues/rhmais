<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TceAditivo extends Model
{
    protected $fillable = ['agente_integracao', 'estagiario_id', 'empresa_id', 'instituicao_id', ' beneficio_id',
        'apolice_id', 'setor_id', 'bolsa_id', 'contrato', 'assinado', 'obrigatorio', 'status', 'data_inicio', 'data_fim', 'horario_id', 'atividade_id', 'orientador_id', 'supervisor_id', 'data_doc', 'obs'];

    protected $table = 'tce_contrato';

    public function tceAditivo()
    {
        return $this->hasMany('App\Estagiario');
    }
}
