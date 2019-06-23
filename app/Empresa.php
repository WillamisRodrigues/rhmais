<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
     protected $fillable = [
        'id', 'razao_social', 'cnpj','insc_estadual','telefone','celular','site_url'
    ];
    protected $table = 'empresa';

    public function  endereco(){
        return $this->HasOne(Endereco::class, 'empresa_id', 'empresa_id')->select();
    }

     public function  usuario(){
        return $this->HasOne(Unidade::class, 'usuario_id', 'usuario_id')->select();
    }
}
