<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->onDelete('cascade');
            $table->string('state')->default('not_bad');
            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->onDelete('cascade');
            $table->float('price')->default(0.0);
            $table->integer('quantity')->default(1);
            $table->string('type_transaction')->default('');
            $table->string('address')->default('');
            $table->string('marque')->default('');
            $table->string('method_payer')->default('');
            $table->string('photo')->default('1_4');
            $table->text('description');
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
        Schema::dropIfExists('products');
    }
}
