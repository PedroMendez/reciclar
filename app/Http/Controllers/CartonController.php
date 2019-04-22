<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carton;

class CartonController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Carton  $carton
     * @return \Illuminate\Http\Response
     */
    public function store(Carton $carton)
    {

        request()->validate([
            'cantidad' => ['required', 'min:1'],
            'carton' => ['required', 'min:3']
        ]);
        
        Carton::create(request(['user_id', 'cantidad', 'carton']));
        
        return redirect('/home');
    } 
}
