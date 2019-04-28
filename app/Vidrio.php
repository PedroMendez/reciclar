<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vidrio extends Model
{

	protected $fillable = [
    	'user_id', 'cantidad', 'vidrio'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
