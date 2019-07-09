<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
     protected $fillable = ['id','nome'];
    protected $table = 'estado';

    public function cidades()
    {
        return $this->hasMany('App\Cidade');
    }
}
