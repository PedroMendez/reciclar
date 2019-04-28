<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plastico;
use Illuminate\Support\Facades\Auth;

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
        
        $plastico = Plastico::create(request(['user_id', 'cantidad', 'plastico']));
        
        flash('Gracias por reciclar el plástico! El plástico tarda 1000 años en biodegradarse')->success();
        
        return redirect('/plastico/' . $plastico->id);
    } 
    /**
     * Show detail.
     *
     * @param  \Illuminate\Http\Plastico  $plastico
     * @return \Illuminate\Http\Response
     */
    public function show(Plastico $plastico)
    {
        $id = Auth::id();

        if ($id == $plastico->user_id)
        {
            $user = $plastico->user;

            return view('plastico.show', compact('plastico', 'user'));
        } 
        return abort(403);
    }      
}
