<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'insc_estadual',
        'telefone',
        'celular',
        'site_url',
        'rua',
        'numero',
        'bairro',
        'cep',
        'complemento',
        'cidade',
        'estado',
        'responsavel',
        'email',
        'cpf',
        'nome_rep',
        'rg_rep',
        'cpf_rep',
        'email_rep',
        'celular_rep',
        'nome_contato',
        'email_contato',
        'celular_contato',
        'data_estagiario',
        'data_fechamento',
        'data_boleto',
        'custo_unitario',
        'ativo',
    ];

    protected $table = 'empresa';

    public function estagiarios()
    {
        return $this->hasMany('App\Estagiario', 'empresa_id');
    }
    public function horario()
    {
        return $this->hasMany('App\Horario', 'empresa_id', 'id');
    }
    public function supervisor()
    {
        return $this->hasMany('App\Supervisor', 'empresa_id', 'id');
    }
    public function cau()
    {
        return $this->hasOne('App\Cau', 'empresa_id', 'id');

    }
    public function atividade()
    {
        return $this->hasMany('App\Atividade', 'empresa_id', 'id');
    }
    public function tceContrato()
    {
        return $this->hasMany('App\TceContrato', 'empresa_id', 'id');
    }
    public function rescisaoFolha()
    {
        return $this->hasMany('App\FolhaRescisao', 'empresa_id', 'id');
    }
    public function pagamentoFolha()
    {
        return $this->hasMany('App\FolhaPagamento', 'empresa_id', 'id');
    }

}
