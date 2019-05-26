<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleos extends Model
{
    public function empresa(){
        return $this->belongsTo(User::class);
    }
}
