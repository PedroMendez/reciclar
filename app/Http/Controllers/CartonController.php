<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carton;
use Illuminate\Support\Facades\Auth;

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
        
        $carton = Carton::create(request(['user_id', 'cantidad', 'carton']));

        flash('Gracias por reciclar cartón! El cartón tarda 3 meses en biodegradarse')->success();
        
        return redirect('/carton/' . $carton->id);
    } 

    /**
     * Show detail.
     *
     * @param  \Illuminate\Http\Carton  $carton
     * @return \Illuminate\Http\Response
     */
    public function show(Carton $carton)
    {
        $id = Auth::id();

        if ($id == $carton->user_id)
        {
            $user = $carton->user;

            return view('carton.show', compact('carton', 'user'));
        } 
        return abort(403);
    }  
}
