<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\produit;

class PanierController extends Controller
{
    public function panier()
    {
        return view("panier");
    }

    public function commande()
    {
        auth()->membre()->commande()->create([
            'date_commande' => Carbon::now(),
            'prix_commande' => 0,
            'statut' => "a payer",
        ]);
        
    }
    public function store(Request $request)
    {
        $produit = produit::find($request->produit);
        Cart::add($produit->id, $produit->nom, 1, $produit->prix)
        ->associate('App\Models\produit');

        return back()->with('success', 'Le produit a été ajouté au panier');
    }
   

    
}
