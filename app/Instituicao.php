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
        'city',
        'state',
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
}
