<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguradora extends Model
{
    protected $fillable = ['nome', 'n_apolice', 'agente_intregacao', 'apolice'];
    protected $table = 'seguradora';

}
