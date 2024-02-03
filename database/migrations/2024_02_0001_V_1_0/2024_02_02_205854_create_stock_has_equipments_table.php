<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stock_has_equipments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('equipment_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->integer('minutes_in_use')->unsigned();

            $table->foreign('equipment_id')->references('id')->on('equipments');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_has_equipments');
    }
};
