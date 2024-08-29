<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_class');
            $table->uuid('id_users');
            $table->uuid('id_order');
            $table->string('generate_ticket');
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('id_class')->references('id')->on('class')->onDelete('cascade');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_order')->references('id')->on('order')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('ticket');
    }
};
