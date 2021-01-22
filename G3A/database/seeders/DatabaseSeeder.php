<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\produit;
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
    }
}
