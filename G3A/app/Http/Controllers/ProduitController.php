<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;
use App\Models\avi;

class ProduitController extends Controller
{
    public function produit(int $id)
    {
        $produit = produit::findorfail($id);
        $avis = avi::where('id_produit', '=', $id );
        return view('produit', compact('produit', 'avis'));
    }
}

