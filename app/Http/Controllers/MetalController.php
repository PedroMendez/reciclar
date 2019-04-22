<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metal;

class MetalController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function store(Metal $metal)
    {

        request()->validate([
            'cantidad' => ['required', 'min:1'],
            'metal' => ['required', 'min:3']
        ]);
        
        Metal::create(request(['user_id', 'cantidad', 'metal']));
        
        return redirect('/home');
    } 
}
