<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cau extends Model
{
    protected $fillable = ['empresa_id', 'data_inicio', 'data_fim', 'situacao', 'agente_integracao',
        'data_doc', 'obs'];
    protected $table = 'cau';

    public function empresa()
    {
        return $this->belongsTo('App\Empresa');

    }

}
