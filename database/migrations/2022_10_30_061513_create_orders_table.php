<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string( 'lname');
            $table->string( 'email');
            $table->string( 'phone');
            $table->string( 'address1');
            $table->string( 'address2');
            $table->string( 'city');
            $table->string( 'state');
            $table->string('country');
            $table->string ( 'pincode');
            $table->tinyInteger('status')->default('0');
            $table->string('message')->nullable();
            $table->string('tracking_no');
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
        Schema::dropIfExists('orders');
    }
}
