<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public  function profil()
    {
        return view('profil', [
            'user' => auth()->user(),
        ]);
    }

    public function deconnexion()
    {
        auth()->logout();

        return redirect('/connexion');
    }

    public function form_password_modification()
    {
        return view('UserAccount/password_modification');


        return redirect('/connexion');
    }

    public function password_modification()
    {
        request()->validate([
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required']
        ]);

        $user = auth()->user();
        $user->password = bcrypt(request('password'));
        $user->save();

        /*auth()->user()->update([
            'password' => bcrypt(request('password')),
        ]);*/

        return redirect('/profil');
    }
}
