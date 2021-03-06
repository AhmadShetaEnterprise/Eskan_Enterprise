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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('unit_price');
            $table->integer('finance_id')->nullable();
            $table->integer('payment_kind_id')->nullable();
            $table->integer('payment_value')->nullable();
            $table->integer('residual')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('cash_payment')->nullable();
            $table->integer('installments')->nullable();
            $table->integer('installment_value')->nullable();
            $table->integer('customer_id');
            $table->integer('unit_id');
            $table->integer('property_id');
            $table->integer('main_project_id');
            $table->integer('construction_id');
            $table->integer('level_id');
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
        Schema::dropIfExists('payments');
    }
};
