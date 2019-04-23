<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Papel;

class PapelController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Papel  $papel
     * @return \Illuminate\Http\Response
     */
    public function store(Papel $papel)
    {

        request()->validate([
            'cantidad' => ['required', 'min:1'],
            'papel' => ['required', 'min:3']
        ]);
        
        Papel::create(request(['user_id', 'cantidad', 'papel']));
        
        flash('Gracias por reciclar papel! El planeta va a ser un mejor lugar con tu ayuda')->success();        
        
        return redirect('/home');
    } 
}
