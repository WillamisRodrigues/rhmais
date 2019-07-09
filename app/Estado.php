<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
     protected $fillable = ['nome'];
    protected $table = 'estado';

    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'nome');
    }
}
