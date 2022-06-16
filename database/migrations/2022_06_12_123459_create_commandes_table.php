<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->double('total');
            $table->integer('num_commande');
            $table->dateTime('date_livrasion');
            $table->string('mode_paiement');
            $table->string('etat_commande');
            $table->foreignId('restaurants_id')->constrained('restaurants');
            $table->foreignId('paniers_id')->constrained('Paniers');
            $table->foreignId('clients_id')->constrained('clients');
            $table->foreignId('Livreurs_id')->constrained('Livreurs');
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
        Schema::dropIfExists('commandes');
    }
}
