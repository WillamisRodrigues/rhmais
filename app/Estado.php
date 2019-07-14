<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
     protected $fillable = ['uf','nome'];
    protected $table = 'estado';

     public function cidade()
    {
        return  $this->hasMany(Cidade::class);

    }
      public function getUrlAttribute()
    {
        // return route ("questions.show", $this->id);
        return '#';
    }
}
