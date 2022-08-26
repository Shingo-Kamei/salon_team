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
            $table->integer('apointment_id')->primary();
            $table->string('shop_name',100);
            $table->string('user_name',20);
            $table->string('email', 254)->unique();
            $table->string('tel',25);
            $table->string('detail',1000);
            $table->timestamps();
            $table->datetime('appointment_at');
            $table->datetime('created_at');
            $table->datetime('updated_at');
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
