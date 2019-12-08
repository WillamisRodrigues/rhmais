<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeneficioEstagiario extends Model
{
    protected $fillable = ['referencia', 'beneficio_id', 'estagiario_id', 'tipo', 'valor', 'empresa_id'];
    protected $table = 'beneficio_estagiario';
}
