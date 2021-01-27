<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membre;

class UserAccountController extends Controller
{
    public  function dashboard()
    {
        return view('UserAccount/dashboard', [
            'membre' => auth()->user(),
        ]);
    }

    public function signout()
    {
        auth()->logout();

        return redirect('/connexion');
    }

    public function form_mdp_confirmation()
    {
        return view('UserAccount/password_modification');


        return redirect('/connexion');
    }

    public function mdp_confirmation()
    {
        request()->validate([
            'mdp' => ['required', 'min:8', 'confirmed'],
            'mdp_confirmation' => ['required']
        ]);

        $membre = auth()->user();
        $membre->mdp = bcrypt(request('mdp'));
        $membre->save();

        /*auth()->user()->update([
            'password' => bcrypt(request('password')),
        ]);*/

        return redirect('/dashboard');
    }
}
