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

        flash('Gracias por reciclar metal! El metal puede tardar entre 200 y 500 años en biodegradarse')->success();
        
        return redirect('/home');
    } 
}
