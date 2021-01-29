<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\commande;

class UserAccountController extends Controller
{


    public  function profil() //affichage d'un profil
    {
        $commandes = commande::where('statut', '=', 'a payer');
        $revenu = 0;
        if (!empty($commandes)) {
            foreach ($commandes as $commande) {
                $revenu = $revenu + $commande->prix_total;
            }
        }
        return view('profil', [
            'user' => auth()->user(),
            'users' => User::all(),
            'nbr_user' => User::count(),
            'revenu_totaux' => $revenu,
        ]);
    }

    public function modifier_profil(Request $request) //fonction update profil 
    {
        $user = user::findorfail($request->user);
        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'email'],
            'ville' => ['required'],
            'adresse' => ['required'],
            'pays' => ['required'],
            'dtn' => ['required'],
            'cp' => ['required'],
        ]);

        $date = date('Y-m-d', strtotime(str_replace('/', '-', $request->dtn)));
        $user = auth()->user();
        $user->nom = request('nom');
        $user->prenom = request('prenom');
        $user->email = request('email');
        $user->ville = request('ville');
        $user->adresse = request('adresse');
        $user->pays = request('pays');
        $user->dtn = $date;
        $user->code_postal = request('cp');
        $user->save();
        return back()->with('success', "Vos coordonnées ont étés mises à jour");
    }

    /* Pour avoir le revenu par semaine
    public function revenu_semaine()
    {
        $commandes = DB::table("commande")
                        ->where('statut', '=', 'a payer')
                        ->where('date_commande', 'between', DATEADD($commande->date_commande, -7, '20210129'), 'AND', '20210129');
        $revenu = 0;
        if (!empty($commandes)){
            foreach($commandes as $commande){
                $revenu = $revenu + $commande->prix_total;
            }
        }
        return $revenu;
    }*/

    public function deconnexion() //deconnexion
    {
        auth()->logout();

        return redirect('/connexion');
    }


    public function password_modification() //modifier un password mais pas implémentter
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
