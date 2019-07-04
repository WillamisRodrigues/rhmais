<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = ['nome'];
    protected $table = 'tce_contrato';
}
