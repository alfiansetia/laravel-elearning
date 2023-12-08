<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id('CartID');
            $table->foreignId('UserID')->constrained('users', 'UserID');
            $table->foreignId('ProductID')->constrained('products', 'ProductID')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantity');
            $table->integer('price');
            $table->unsignedBigInteger('totalprice');
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
        Schema::dropIfExists('carts');
    }
}
