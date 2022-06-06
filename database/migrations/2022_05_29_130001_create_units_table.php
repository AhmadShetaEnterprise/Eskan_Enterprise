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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('property_id');
            $table->integer('main_project_id');
            $table->integer('construction_id');
            $table->integer('level_id');
            $table->string('site');
            $table->string('space');
            $table->integer('price_m');
            $table->integer('unit_price');
            $table->text('unitDescription')->nullable();
            $table->string('status');
            $table->integer('customer_id');
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
        Schema::dropIfExists('units');
    }
};
