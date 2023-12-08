<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id('TransactionDetailID');
            $table->foreignId('HeaderTransactionID')->constrained('header_transactions', 'HeaderTransactionID')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('ProductID')->constrained('products', 'ProductID')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantity');
            $table->string('subtotal');
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
        Schema::dropIfExists('transaction_details');
    }
}
