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
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->enum('gender', ["male", "female"])->nullable();
            $table->string('hobby')->nullable();
            $table->enum('state', ['gujarat', 'maharashtra', 'up'])->nullable();
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
        Schema::dropIfExists('students');
    }
};
