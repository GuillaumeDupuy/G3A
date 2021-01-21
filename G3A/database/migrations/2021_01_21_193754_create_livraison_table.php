<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivraisonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livraison', function (Blueprint $table) {
            $table->string('mode_livraison')->VARCHAR(50);
            $table->string("date_livraison")->DATE();
            $table->string("status")->VARCHAR(30);
            $table->string("adresse_facturation")->VARCHAR(50);
            $table->string("num_commande")->INT();
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
        Schema::dropIfExists('livraison');
    }
}
