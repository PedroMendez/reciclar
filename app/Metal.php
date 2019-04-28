<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metal extends Model
{

	protected $fillable = [
    	'user_id', 'cantidad', 'metal'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
