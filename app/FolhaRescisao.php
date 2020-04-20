<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FolhaRescisao extends Model
{
    //
    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }
}
