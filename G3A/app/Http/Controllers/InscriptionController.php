<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membre;

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
            'mdp_confirmation' => ['required'],
            'prenom' => ['required'],
            'nom' => ['required'],
            'dtn' => ['required'],
            'adresse' => ['required'],
            'ville' => ['required'],
            'code_postal' => ['required'],
            'soldes' => ['required'],
        ]);


        $membre = membre::create([
            'email' => request('email'),
            'mdp' => request('mdp'),
            'prenom' => request('prenom'),
            'nom' => request('nom'),
            'dtn' => request('dtn'),
            'adresse' => request('adresse'),
            'ville' => request('ville'),
            'code_postal' => request('code_postal'),
            'soldes' => request('soldes'),
        ]);

        return "Your email is " . request('email');
    }
}
