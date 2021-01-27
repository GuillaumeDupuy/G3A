<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\produit;
use App\Models\membre;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        produit::create([
            'nom' => 'Call of Duty: Modern Warfare 3',
            'prix' => 10,
            'description' => "Jeu d'action et de tir à la première personne développé par Activision",
            'plateforme' => 'PlayStation 3',
            'code_activ' => 123456,
            'date_sortie' => Carbon::create('2011', '11', '08'),
            'quantite' => 20,
            'categorie' => "FPS",
            'note' => 20,
            'photo' => "pathtophoto"
        ]);

        membre::create([
            'email' => 'guillaume.dupuy@ynov.com',
            'mdp' => 'test1234',
            'prenom' => 'Guillaume',
            'nom' => 'Dupuy',
            'dtn' => Carbon::create('2001', '20', '07'),
            'adresse' => '18 avenue du marechal joffre',
            'ville' => 'Neuilly-Plaisance',
            'code_postal' => '93360',
            'soldes' => 78
        ]);
    }
}
