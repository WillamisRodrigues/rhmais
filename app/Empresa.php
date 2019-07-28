<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
     protected $fillable = [
         'razao_social', 'cnpj','insc_estadual','telefone','celular','site_url'
    ];
    protected $table = 'empresa';

     public function estagios()
     {
          return  $this->hasMany('App\Estagiario', 'empresa_id');
     }
  }
