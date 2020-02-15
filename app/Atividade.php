<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = ['nome', 'empresa', 'agente_integracao'];
    protected $table = 'atividade';
}
