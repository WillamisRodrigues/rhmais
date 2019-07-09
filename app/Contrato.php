<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = ['nome','status'];
    protected $table = 'tce_contrato';
}
