<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metal;
use Illuminate\Support\Facades\Auth;

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
        
        $metal = Metal::create(request(['user_id', 'cantidad', 'metal']));

        flash('Gracias por reciclar metal! El metal tarda entre 200 y 500 años en biodegradarse')->success();
        
        return redirect('/metal/' . $metal->id);
    } 
    /**
     * Show detail.
     *
     * @param  \Illuminate\Http\Metal  $metal
     * @return \Illuminate\Http\Response
     */
    public function show(Metal $metal)
    {
        $id = Auth::id();

        if ($id == $metal->user_id)
        {
            $user = $metal->user;

            return view('metal.show', compact('metal', 'user'));
        } 
        return abort(403);
    }     
}
