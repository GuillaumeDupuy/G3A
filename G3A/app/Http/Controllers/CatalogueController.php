<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;

class CatalogueController extends Controller
{
    public function catalogue() {
        $produits = produit::all();

        return view('catalogue', [
            'produits' => $produits
            ]);
    }

    public function pagination(){

        $produits = Produit::all();
        $produits = Produit::simplePaginate(2);



        $produits = Produit::orderBy('created_at','desc')
            ->simplepaginate(2);

        return view('Produit/produit',[
            'produits'=>$produits,

        ]);
    }

    public function rechercher()
    {
        $produits = produit::all();
        if(isset($_GET['recherche']) AND !empty($_GET['recherche'])) {
            $recherche = htmlspecialchars($_GET['recherche']);
            $produits = $produits->where('nom', '=', $recherche);
        if($articles->rowCount() == 0) {
            $produits = $produits->where('nom', 'like', '%'.$recherche.'%'); 

        return view('catalogue', compact('produits'));
    }
}
    }
}
