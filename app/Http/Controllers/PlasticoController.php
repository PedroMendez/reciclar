<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plastico;

class PlasticoController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Plastico  $plastico
     * @return \Illuminate\Http\Response
     */
    public function store(Plastico $plastico)
    {

        request()->validate([
            'cantidad' => ['required', 'min:1'],
            'plastico' => ['required', 'min:3']
        ]);
        
        Plastico::create(request(['user_id', 'cantidad', 'plastico']));
        
        return redirect('/home');
    } 
}
