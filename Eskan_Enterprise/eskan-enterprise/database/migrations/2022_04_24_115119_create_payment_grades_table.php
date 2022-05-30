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
        Schema::create('payment_grades', function (Blueprint $table) {
            $table->id();
            $table->integer('unit_price');
            $table->integer('beforehand');
            $table->integer('license_grade');
            $table->string('license_grade_duration');
            $table->integer('start_grade');
            $table->string('start_grade_duration');
            $table->integer('receiving_grade');
            $table->string('receiving_grade_duration');
            $table->integer('staying_due');
            $table->integer('installment_duration');
            $table->integer('installment');
            $table->integer('cash_discount');
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
        Schema::dropIfExists('payment_grades');
    }
};
