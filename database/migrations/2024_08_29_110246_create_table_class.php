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
        Schema::create('class', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('class_name');
            $table->text('description')->nullable();
            $table->string('img')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->date('date_release');
            $table->date('date_finish');
            $table->integer('max_participant');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('class');
    }
};
