<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cau extends Model
{
    protected $fillable = [
        'empresa_id', 'city', 'data_inicio', 'data_fim', 'situacao', 'agente_integracao',
        'data_doc', 'obs'
    ];
    protected $table = 'cau';
}
