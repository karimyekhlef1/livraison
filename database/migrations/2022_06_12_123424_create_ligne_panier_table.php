<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLignePanierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_panier', function (Blueprint $table) {
            $table->id();
            $table->double('quantite');
            $table->integer('montant');
            $table->foreignId('panier_id')->constrained('paniers');
            $table->foreignId('plats_id')->constrained('plats');

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
        Schema::dropIfExists('ligne_panier');
    }
}
