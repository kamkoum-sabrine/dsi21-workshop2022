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
            $table->increments('id');

            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('restrict')->onUpdate('restrict');
            $table->date('order_date');
            $table->double('total_amount',10,3);
            $table->double('tax_rate',5,2);
            $table->double('tax_amount',10,3);
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