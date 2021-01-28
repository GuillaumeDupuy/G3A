<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membre as membre;

class InscriptionController extends Controller
{

    public  function inscription()
    {
        return view('inscription');
    }

    public function formulaire()
    {

        request()->validate([
            'email' => ['required', 'email'],
            'mdp' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
            'nom' => ['required'],

        ]);

        $membre = membre::create([
            'email' => request('email'),
            'mdp' => bcrypt(request('mdp')),
            'nom' => request('nom'),
        ]);
        return "Your email is " . request('email');
    }
}
