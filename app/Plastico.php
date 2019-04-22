<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plastico extends Model
{

	protected $fillable = [
    	'user_id', 'cantidad', 'plastico'
    ];
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
