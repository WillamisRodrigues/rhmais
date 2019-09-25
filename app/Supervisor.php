<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $fillable = ['nome', 'cpf', 'rg', 'agente_integracao', 'empresa_id', 'city', 'email'];
    protected $table = 'supervisor';
}
