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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->integer('super_ecto_100')->nullable();
            $table->integer('super_ecto')->nullable();
            $table->integer('premium')->nullable();
            $table->integer('regular')->nullable();
            $table->integer('diesel')->nullable();
            $table->integer('card')->nullable();
            $table->text('branch')->nullable();
            $table->decimal('sum');
            $table->decimal('super_ecto_100_price')->nullable();
            $table->decimal('super_ecto_price')->nullable();
            $table->decimal('premium_price')->nullable();
            $table->decimal('regular_price')->nullable();
            $table->decimal('diesel_price')->nullable();
            $table->decimal('discount')->nullable();
            $table->bigInteger('sum_liter')->nullable();
            $table->text('order_info');
            $table->text('order_type');
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
};
