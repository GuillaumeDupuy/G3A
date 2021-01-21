<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailComTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_com', function (Blueprint $table) {
            $table->id("id_produit")->INT();
            $table->string("num_commande")->VARCHAR(20);
            $table->string("quantité")->NUM(2)->DEFAULT(1);
            $table->string("prix_total")->NUM(3);
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
        Schema::dropIfExists('detail_com');
    }
}
