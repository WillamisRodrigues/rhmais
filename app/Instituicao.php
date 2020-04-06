<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $fillable = [
        'razao_social',
        'nome_instituicao',
        'cnpj',
        'insc_estadual',
        'telefone',
        'site_url',
        'cidade',
        'estado',
        'nome_rep',
        'rg_rep',
        'cpf_rep',
        'email_rep',
        'celular_rep',
        'mantenedora',
        'rua',
        'bairro',
        'numero',
        'complemento',
        'cep',
        'nome_contato',
        'email_contato',
        'celular_contato'];

    protected $table = 'instituicao';

    public function estagios()
    {
        return $this->hasMany('App\Estagiario');
    }

    public function cce()
    {
        return $this->hasOne('App\Cce', 'instituicao_id', 'id');

    }
    public function tceContrato()
    {
        return $this->hasMany('App\TceContrato', 'instituicao_id', 'id');
    }
    public function orientador()
    {
        return $this->hasMany('App\Orientador', 'instituicao_id', 'id');
    }
}
