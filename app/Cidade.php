<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['nome', 'estado_id'];
    protected $table ='cidade';

  public function estado( ) {

        return $this->belongsTo(Estado::class);
    }

      public function setTitleAttribute($value)
    {
        $this->attributes['uf'] = $value;
        $this->attributes['nome'] = str_slug($value);
    }

    public function getUrlAttribute()
    {
        return route ("estagiario.create", $this->id);
    }

    public function getCreateDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
