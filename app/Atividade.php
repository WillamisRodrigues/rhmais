<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = ['nome', 'sigla', 'empresa', 'agente_integracao'];
    protected $table ='atividade';
}
