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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('is_company')->nullable();
            $table->string('company_name')->nullable();
            $table->string('customer_name');
            $table->string('customer_last');
            $table->string('username')->nullable();
            $table->string('customer_id');
            $table->string('email');
            $table->text('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('discount')->nullable();
            $table->string('is_admin')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
