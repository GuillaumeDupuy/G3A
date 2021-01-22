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
            $table->integer("id_membre");
            $table->string('email', 30)->UNIQUE();
            $table->string("mdp", 30);
            $table->string("prenom", 20);
            $table->string("nom", 20);
            $table->date("dtn");
            $table->string("adresse", 50);
            $table->string("ville", 30);
            $table->string("code_postal", 5);
            $table->decimal("soldes", 6, 2)->DEFAULT(0);
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
