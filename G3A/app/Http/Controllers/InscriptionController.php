<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class inscriptionController extends Controller
{
    public  function inscription(){
        return view('inscription');
    }
    
    public function formulaire(Request $request){

        
        request()->validate([
            'nom' =>['required'],
            'prenom' =>['required'],
            'email' =>['required','email'],
            'dtn' =>['required'],
            'password' =>['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
        ]);
        dd($request->nom);
        $user = User::create([ 
            'prenom' => request('prenom'),
            'nom' => request('nom'),
            'email' => request('email'),
            'password' => bcrypt(request('password')), 
            "dtn" => Carbon::create(request("dtn")),
        ]);
        
        
        return "Your email is " . request('email');
    }
}
