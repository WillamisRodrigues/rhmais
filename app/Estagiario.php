<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Estagiario extends Model
{
        protected $fillable = ['nome', 'rg','cpf','telefone','celular','email','data_nascimento','ctps','serie_ctps','numero_pis',
        'dt_cadastro','agente_int','pessoa_responsavel','sexo','agente_int','sexo','escolaridade','status','empresa_id','instituicao_id',
        'cep','rua','numero','bairro','complemento','cidade','estado','nacionalidade','obs','banco','conta','codigo_vaga','senha','matricula'];

    protected $table = 'estagiario';

     public function estado() {
        return $this->hasOne(Estado::class, 'nome', 'nome');
    }

    public function cidades() {
        return $this->hasOne(Cidade::class, 'estado_id', 'estado_id');
    }

    public function adicional()
    {
        return $this->hasOne('App\Adicional', 'id', 'adicional_id');
    }

    public function empresas()
    {
        return $this->belongsTo('App\Empresa');
        // return  $this->hasMany('App\Empresa');
    }

    public function instituicoes()
    {
        return $this->belongsTo('App\Instituicao');
        // return  $this->hasMany('App\Instituicao');
    }

    public function tce_contrato()
    {
        // return $this->belongsTo('App\TceContrato');
        return  $this->hasMany('App\TceContrato');
    }
}
