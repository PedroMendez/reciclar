<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carton extends Model
{
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
