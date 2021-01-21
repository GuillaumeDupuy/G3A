<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id("id_produit")->INT();
            $table->string("nom")->VARCHAR(40);
            $table->string("code_activ")->NUM(10);
            $table->string("prix")->DEC(6, 2);
            $table->string("description")->VARCHAR(300);
            $table->string("plateformes")->VARCHAR(100);
            $table->string("categorie")->VARCHAR(50);
            $table->string("note")->NUM(2);
            $table->string("quantite")->NUM(3);
            $table->string("photo")->VARCHAR(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
