<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cau extends Model
{
    protected $fillable = ['empresa_id','data_inicio','data_fim','situacao'];
    protected $table = 'cau';
}
