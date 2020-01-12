<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    protected $fillable  = ['nome', 'sigla'];
    protected $table = 'beneficio';

     public function estagiarios()
    {
        return $this->belongsToMany('App\BeneficioEstagiario');
    }
}
