<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['nome', 'estado_id'];
    protected $table ='cidade';

     public function estado()
    {
        return $this->belongsTo(Estado::class, 'nome');
    }
}
