<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TceContrato extends Model
{
    protected $fillable = ['agente_integracao','nome_estagiario', 'nome_empresa', 'nome_instituicao',' beneficio',
    'seguro','setor','bolsa','contrato','assinado','obrigatorio','status','data_inicio','data_fim','horario','atividade','orientador','supervisor','data_doc'];

    protected $table = 'tce_contrato';

    public function empresas()
    {
        return  $this->hasMany('App\Empresa');
    }

    public function estagiarios()
    {
        return  $this->hasMany('App\Estagiario');
    }

    public function instituicoes()
    {
        return  $this->hasMany('App\Instituicao');
    }

}
