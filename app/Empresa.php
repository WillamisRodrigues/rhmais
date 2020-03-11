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
    public function horarios()
    {
        return $this->hasMany('App\Horario', 'empresa_id');
    }
    public function supervisores()
    {
        return $this->hasMany('App\Supervisor', 'empresa_id');
    }

}
