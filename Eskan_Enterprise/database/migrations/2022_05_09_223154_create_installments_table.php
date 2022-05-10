<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->integer('space_payment');
            $table->integer('licences_payment');
            $table->integer('start_payment');
            $table->integer('to_recieve_payment');
            $table->integer('unit_coast');
            $table->integer('residual');
            $table->integer('installments');
            $table->integer('installment_value');
            $table->string('installment_month');
            $table->integer('status');
            $table->integer('customer_id');
            $table->integer('unit_id');
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
        Schema::dropIfExists('installments');
    }
};
