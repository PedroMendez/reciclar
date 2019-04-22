<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vidrio;

class VidrioController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Vidrio  $vidrio
     * @return \Illuminate\Http\Response
     */
    public function store(Vidrio $vidrio)
    {

        request()->validate([
            'cantidad' => ['required', 'min:1'],
            'vidrio' => ['required', 'min:3']
        ]);
        
        Vidrio::create(request(['user_id', 'cantidad', 'vidrio']));
        
        return redirect('/home');
    } 
}
