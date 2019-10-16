<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vidrio;
use Illuminate\Support\Facades\Auth;

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

        $vidrio = Vidrio::create(request(['user_id', 'cantidad', 'vidrio']));

        flash('Gracias por reciclar el vidrio! El vidrio tarda millones de años en biodegradarse')->success();

        return redirect('/vidrio/' . $vidrio->id);
    }
    /**
     * Show detail.
     *
     * @param  \Illuminate\Http\Vidrio  $vidrio
     * @return \Illuminate\Http\Response
     */
    public function show(Vidrio $vidrio)
    {
        $id = Auth::id();

        if ($id == $vidrio->user_id) {
            $user = $vidrio->user;

            return view('vidrio.show', compact('vidrio', 'user'));
        }
        return abort(403);
    }
}
