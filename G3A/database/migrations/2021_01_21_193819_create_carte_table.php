<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carte', function (Blueprint $table) {
            $table->id("id_membre")->INT();
            $table->string("nom")->VARCHAR(30);
            $table->string("prenom")->VARCHAR(30);
            $table->string("numero")->NUM(16);
            $table->string("date")->DATE();
            $table->string("crypto")->NUM(3);
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
        Schema::dropIfExists('carte');
    }
}
