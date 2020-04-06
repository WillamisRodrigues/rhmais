<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TceContrato extends Model
{
    protected $fillable = ['agente_integracao', 'estagiario_id', 'empresa_id', 'instituicao_id', ' beneficio',
        'seguro', 'setor', 'bolsa', 'contrato', 'assinado', 'obrigatorio', 'status', 'data_inicio', 'data_fim', 'horario', 'atividade', 'orientador', 'supervisor', 'data_doc', 'curso'];

    protected $table = 'tce_contrato';

    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }
    public function instituicao()
    {
        return $this->belongsTo('App\Instituicao');
    }

    public function estagiario()
    {
        return $this->belongsTo('App\Estagiario');
    }

}
