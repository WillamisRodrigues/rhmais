<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguradora extends Model
{
    protected $fiallable = ['nome','n_apolice','empresa_id','agente_intregacao','apolice'];
    protected $table ='seguradora';

}
