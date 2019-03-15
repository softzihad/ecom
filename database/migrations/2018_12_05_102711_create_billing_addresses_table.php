<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customerID');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('phone');
            $table->string('address');
            $table->string('post_code');
            $table->string('city');
            $table->string('country');
            $table->integer('total');
            $table->integer('payment')->default(0);
            $table->integer('delivery')->default(0);
            $table->string('company')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('billing_addresses');
    }
}
