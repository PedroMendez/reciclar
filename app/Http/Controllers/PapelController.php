<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Papel;
use Illuminate\Support\Facades\Auth;

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
        
        $papel = Papel::create(request(['user_id', 'cantidad', 'papel']));
        
        flash('Gracias por reciclar papel! El planeta va a ser un mejor')->success();        
        
        return redirect('/papel/' . $papel->id);
    } 
    /**
     * Show detail.
     *
     * @param  \Illuminate\Http\Papel  $papel
     * @return \Illuminate\Http\Response
     */
    public function show(Papel $papel)
    {
        $id = Auth::id();

        if ($id == $papel->user_id)
        {
            $user = $papel->user;

            return view('papel.show', compact('papel', 'user'));
        } 
        return abort(403);
    }      
}
