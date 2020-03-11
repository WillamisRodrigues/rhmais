<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $fillable = ['nome', 'cpf', 'rg', 'agente_integracao', 'empresa_id', 'cidade', 'email'];
    protected $table = 'supervisor';

    public function empresas()
    {
        return $this->belongsTo('App\Empresa');
    }
}
