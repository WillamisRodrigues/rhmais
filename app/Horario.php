<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = ['descricao', 'qtd_horas','empresa_id'];
    protected $table ='horario';
}
