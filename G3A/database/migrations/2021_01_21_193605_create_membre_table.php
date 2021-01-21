<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membre', function (Blueprint $table) {
            $table->id("id_membre")->INT();
            $table->string('email')->VARCHAR(30)->UNIQUE();
            $table->string("mdp")->VARCHAR(30);
            $table->string("prenom")->VARCHAR(20);
            $table->string("nom")->VARCHAR(20);
            $table->string("dtn")->DATE();
            $table->string("adresse")->VARCHAR(50);
            $table->string("ville")->VARCHAR(30);
            $table->string("code_postal")->NUM(5);
            $table->string("soldes")->DEC(6, 2)->DEFAULT(0);
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
        Schema::dropIfExists('membre');
    }
}
