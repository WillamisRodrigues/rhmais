<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeneficioEstagiario extends Model
{
    protected $fillable = ['referencia', 'beneficio_id', 'estagiario_id', 'tipo', 'valor', 'empresa_id', 'folha_id'];
    protected $table = 'beneficio_estagiario';

     /**
     * The users that belong to the role.
     */
    public function beneficios()
    {
        return $this->belongsToMany('App\Beneficio');
    }
}
