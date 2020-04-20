<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FolhaPagamento extends Model
{
    protected $fillable = ['valor_bolsa', 'valor_liquido'];
    protected $table = 'folha_pagamento';

    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }
}
