<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
        protected $fillable = [
        'id','razao_social','nome_instituicao','cnpj','insc_estadual','telefone','site_url'
        ];
    protected $table = 'instituicao';
}
