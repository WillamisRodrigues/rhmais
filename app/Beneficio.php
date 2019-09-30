<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    protected $fillable  = ['nome', 'sigla', 'empresa_id', 'agente_integracao'];
    protected $table = 'beneficio';
}
