<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{

	protected $fillable = [
    	'user_id', 'cantidad', 'papel'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
